<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TopupDetails;
use App\OperatorNetwork;
use Validator;
use App\Http\Traits\ResponseTrait;
use Stripe\Stripe;


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

}
