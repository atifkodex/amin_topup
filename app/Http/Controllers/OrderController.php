<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TopupDetails;
use App\OperatorNetwork;
use App\Transaction;
use Validator;
use App\Http\Traits\ResponseTrait;
use Stripe\Stripe;
use Slim\Http\Response;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;



class OrderController extends Controller
{
    use ResponseTrait;

    public function paymentIntent(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $customer = $stripe->customers->create([
            'description' => 'My First Test Customer',
        ]);

        $ephemeralKey = \Stripe\EphemeralKey::create(
            ['customer' => $customer->id],
            ['stripe_version' => '2020-08-27']
        );
        $paymentIntent = $stripe->paymentIntents->create([
            'amount' => $request->amount * 100,
            'currency' => 'usd',
            'customer' => $customer->id,
        ]);

        $pay_int_res = [
            'result' => 'Success',
            'message' => 'Payment intent successfully!',
            'payment_intent' => $paymentIntent->client_secret,
            'ephemeral_key' => $ephemeralKey->secret,
            'customer_id' => $customer->id,
            'publishablekey' => env('STRIPE_KEY'),
            'secret' => env('STRIPE_SECRET'),
            'id' => $paymentIntent->id
        ];
        return $this->sendResponse($pay_int_res, 'Payment Intent');
    }


    public function stripePaymentUrl(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'price_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->errors()->all()), []);
        }
        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here:  https://dashboard.stripe.com/apikeys 
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $link = $stripe->paymentLinks->create(
            [
                'line_items' => [['price' => $request->price_id, 'quantity' => 1]],
                'after_completion' => [
                    'type' => 'redirect',
                    'redirect' => ['url' => 'http://localhost/amin-topup/public/api/admin/save_order'],
                ],
            ],
        );

        $success = [
            'result' => 'Success',
            'message' => 'Link generated successfully!',
            'payment_url' => $link->url,
            'payment_id' => $link->id,
            'currency' => $link->currency,
        ];
        return $this->sendResponse($success, 'Payment Intent');
    }

    public function createTransaction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'receiver_name' => 'required',
            'receiver_email' => 'required',
            'receiver_number' => 'required',
            'country' => 'required',
            'receiver_network' => 'required',
            'topup_amount' => 'required',
            'topup_amount_usd' => 'required',
            'processing_fee' => 'required',
            'total_amount_usd' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->errors()->all()), []);
        }

        $loginUserId = Auth::user()->id;
        $transaction = new Transaction;
        $transaction->receiver_name = $request->receiver_name;
        $transaction->receiver_email = $request->receiver_email;
        $transaction->receiver_number = $request->receiver_number;
        $transaction->country = $request->country;
        $transaction->receiver_network = $request->receiver_network;
        $transaction->topup_amount = $request->topup_amount;
        $transaction->topup_amount_usd = $request->topup_amount_usd;
        $transaction->processing_fee = $request->processing_fee;
        $transaction->total_amount_usd = $request->total_amount_usd;
        $transaction->user_id = $loginUserId;
        if(isset($request->receiver_image) && !empty($request->receiver_image)) {
            $transaction->receiver_image = $request->receiver_image;
        }
        $success = $transaction->save();
        if($success){
            $id = $transaction->id;
            $data['transaction_id'] = $id;
            return $this->sendResponse($data, 'Payment Intent');
        }else{
            return $this->sendError("Something went wrong. Please try again.");
        }  
    }

    public function transactionStatus(Request $request){
        $validator = Validator::make($request->all(), [
            'transaction_id' => 'required|exists:transactions,id'
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->errors()->all()), []);
        }
        $status = Transaction::where('id', $request->transaction_id)->update(['status' => 1]);
        if($status){
            return $this->sendResponse([], 'Transaction status updated successfully.');
        }else{
            return $this->sendError("Something went wrong. Please try again.");
        }
    }

    public function topupHistory(Request $request)
    {
        $loginUserId = Auth::user()->id;
        $weeklyTopups = Transaction::select("*")->where('user_id', $loginUserId)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('topup_amount_usd');
        $recentTopups = Transaction::where('user_id', $loginUserId)->orderBy('created_at', 'DESC')->take(5)->get();
        if(count($recentTopups) > 0){
            $success['WeeklyTopups'] = $weeklyTopups;
            $success['recentTopups'] = $recentTopups;
            return $this->sendResponse($success, 'Topup details');
            
        }else{
            return $this->sendError("No topup found for user.");
        }
    }
}
