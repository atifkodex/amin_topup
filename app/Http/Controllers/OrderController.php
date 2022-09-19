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
use App\NotificationLog;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\TopupToken;


class OrderController extends Controller
{
    use ResponseTrait;

    public function paymentIntent(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'amount' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->errors()->all()), []);
        }
        $amount = round($request->amount, 2);
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $customer = $stripe->customers->create([
            'description' => 'Test Customer',
        ]);

        $ephemeralKey = \Stripe\EphemeralKey::create(
            ['customer' => $customer->id],
            ['stripe_version' => '2020-08-27']
        );

        $paymentIntent = $stripe->paymentIntents->create([
            'amount' => $amount * 100,
            'currency' => 'usd',
            'customer' => $customer->id,
            'payment_method_options' => [
                'card' => [
                    'capture_method' => 'manual',
                ],
            ],
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
        // See your keys here:  https://dashboard.stripe.com/apikeys t
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $link = $stripe->paymentLinks->create(
            [
                'line_items' => [['price' => $request->price_id, 'quantity' => 1]],
                'after_completion' => [
                    'type' => 'redirect',
                    'redirect' => ['url' => 'http://kodextech.net/amin-topup/public/sucess'],
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
        // return $this->sendResponse($success, 'Payment Intent');
    }

    public function createTransaction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'receiver_name' => 'required',
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
        if(isset($request->receiver_email) && !empty($request->receiver_email)){
            $transaction->receiver_email = $request->receiver_email;
        }
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
        // $TopupResponse = $this->Topup();
        if($topupResponse == true){
            Transaction::where('id', $request->transaction_id)->update(['status' => 1]);

            // Save data for notification 
            $notification = new NotificationLog;
            $notification->user_id = auth()->user()->id;
            $notification->notification_type = "transaction";
            $notification->transaction_id = $request->transaction_id;
            $notification->notification_status = 0;
            $notification->save();

            return $this->sendResponse([], 'Transaction status updated successfully.');
        }else{
            return $this->sendError("Something went wrong. Please try again.");
        }
    }

    public function Topup(Request $request){
        // Validation for params 
        $validator = Validator::make($request->all(), [
            'intent_id' => 'required',
            'receiver_number' => 'required',
            'amount' => 'required',
            'product_code' => 'required',
            'transaction_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->errors()->all()), []);
        }
        $number = substr($request->receiver_number,0, 3);
        if($number == 930){
            $completeNum = substr($request->receiver_number, 2);
        }elseif($number == 937 || $number == 932){
            $num = substr($request->receiver_number, 2);
            $completeNum = 0 . $num;
        }else{
            $completeNum = $request->receiver_number;
        }
        // Remove white spaces from Number 
        $completeNumber = str_replace(' ', '', $completeNum);

        // All required parameters 
        $serviceID = 'TOPUP';

        $productID = $request->product_code;    //This line will be replaced with test productID for final deployment
        // $productID = 'SALAAM_ERECHARGE';
        $targetMSISDN = $completeNumber;      //This line will be replaced with test number for final deployment
        // $targetMSISDN = '0745557555';
        $unitType = 'EMONEY';
        $currency = 'AFN';
        $exponent = '0';

        $amount = $request->amount;    //This line will be replaced with test amount for final deployment
        // $amount = '01';
        $userIdentifierRaw = 'amintopup';

        $payment['unitType']= $unitType;
        $payment['currency']= $currency;
        $payment['exponent']= $exponent;
        $payment['amount']= $amount;
        $payments = [
            $payment
        ];
        
        $datas['fromUser']['userIdentifier'] = $userIdentifierRaw;
        $datas['payment'] = $payments;
        $datas['serviceID'] = $serviceID;
        $datas['productID'] = $productID;
        $datas['targetMSISDN'] = $targetMSISDN;
        $final['data'] = (object) $datas;

        // Login API Request 
        $data['grantType'] = "password";
        $data['username'] = "amintopup";
        $data['password'] = "J7FAiSSSCWeLUM4";
        $loginData['data'] = (object) $data;

        $username = 'DISTRIBUTOR_API';
        $password = ';<G/2hnC}"HE:Z?A';

        $loginResponse = Http::withoutVerifying()->withBasicAuth($username, $password)->post('https://adp.280.af/login', $loginData);
        $loginResponseBody = $loginResponse->body();
        $loginResponseData = json_decode($loginResponseBody, true);
        $accessToken = $loginResponseData['data']['access_token'];
        // $checkRecord = TopupToken::find(1);
        // if (empty($checkRecord)) {
        //     $topupToken = new TopupToken;
        //     $topupToken->access_token = $accessToken;
        //     $topupToken->save();
        // } else {
        //     $checkRecord->access_token = $accessToken;
        //     $checkRecord->save();
        // }

        // Topup API Request
        $response = Http::withoutVerifying()->withHeaders([
            'Authorization' => 'Bearer ' . $accessToken,
            'Content-Type' => 'application/json'
        ])->post('https://adp.280.af/topup', $final);
        $responseBody = $response->body();
        $responseData = json_decode($responseBody, true);
        dd($responseData);
        // $responseMessage = $responseData['responseMessage']['Message'];
        if(isset($responseData['data']['transactionStatus']) && $responseData['data']['transactionStatus'] == 1){
        
        // Capture Amount 
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $intent = $stripe->paymentIntents->capture(
            $request->intent_id,
            []
        );

            if($intent->status == 'succeeded'){
                $transactionStatus = Transaction::where('id', $request->transaction_id)->update(['status' => 1, 'transaction_id' => $responseData['data']['transactionId']]);
                if($transactionStatus == 1){

                    // Create Notification 
                    $notification = new NotificationLog;
                    $notification->user_id = auth()->user()->id;
                    $notification->notification_type = "transaction";
                    $notification->transaction_id = $request->transaction_id;
                    $notification->notification_status = 0;
                    $notification->save();
                    return $this->sendResponse([], 'Transaction Successfull, Topup sent to receiver.');
                }else{
                    return $this->sendError("payment sent to user, stripe transaction succeeded but the transaction status was not updated due to some error.");
                }
            }else{
                return $this->sendError("Problem occured while transaction call.");
            }
        }else{
            // Cancel Intent 
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $stripe->paymentIntents->cancel($request->intent_id, []);

            return $this->sendError($responseMessage);
        }
    }

    public function topupHistory(Request $request)
    {
        $loginUserId = Auth::user()->id;
        $weeklyTopups = Transaction::select("*")->where(['user_id'=> $loginUserId, 'status' => 1])->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('topup_amount_usd');
        $graphData = ($weeklyTopups * 1000) / 100;
        $recentTopups = Transaction::where('user_id', $loginUserId)->orderBy('created_at', 'DESC')->take(5)->get();
        if(count($recentTopups) > 0){
            $success['WeeklyTopups'] = $weeklyTopups;
            $success['graphData'] = $graphData;
            $success['recentTopups'] = $recentTopups;
            return $this->sendResponse($success, 'Topup details');
        }else{
            return $this->sendError("No topup found for user.");
        }
    }

    public function allTopups(Request $request)
    {
        $loginUserId = Auth::user()->id;
        $where = ['user_id'=> $loginUserId, 'status' => 1];
        $topupAmount = Transaction::where($where)->sum('topup_amount');
        $topups = Transaction::where('user_id', $loginUserId)->orderBy('created_at', 'desc')->get();
        if(count($topups) > 0){
            $success['totalTopupAmount'] = $topupAmount;
            $success['allTopups'] = $topups;
            return $this->sendResponse($success, 'All Topup details');
        }else{
            return $this->sendError("No topup found for user.");
        }
    }

    public function transactionDetail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'transaction_id' => 'required|exists:transactions,id'
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->errors()->all()), []);
        }
        $topupAmount = Transaction::where('id', $request->transaction_id)->first();
        if(!empty($topupAmount)){
            return $this->sendResponse($topupAmount, 'Topup detail');
        }else{
            return $this->sendError("No topup data found for user.");
        }
    }
}
