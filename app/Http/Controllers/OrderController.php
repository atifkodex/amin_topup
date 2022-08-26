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


    public function stripePaymentUrl(Request $request)
    {
        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here:  https://dashboard.stripe.com/apikeys 
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $link = $stripe->paymentLinks->create(
            [
                'line_items' => [['price' => 'price_1LTTyMDFBGCzynQzUUnaXQIq', 'quantity' => 1]],
                'after_completion' => [
                    'type' => 'redirect',
                    'redirect' => ['url' => 'http://kodextech.net/amin-topup/public/api/admin/save_order'],
                ],
            ],
        );

        // $session = $stripe->checkout->sessions->create([
        //     'success_url' => 'https://example.com/success',
        //     'cancel_url' => 'https://example.com/cancel',
        //     'line_items' => [
        //         [
        //         'price' => 'price_1LTTyMDFBGCzynQzUUnaXQIq',
        //         'quantity' => 1,
        //         ],
        //     ],
        //     'mode' => 'payment',
        // ]);

        $success = [
            'result' => 'Success',
            'message' => 'Link generated successfully!',
            'payment_url' => $link->url,
            'payment_id' => $link->id,
            'currency' => $link->currency,
            // 'payment_status' => $session->payment_status,
            // 'session_id' => $session->id,
        ];
        return $this->sendResponse($success, 'Payment Intent');
    }

    public function saveOrder(Request $request)
    {
        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        function print_log($val) {
            return file_put_contents('php://stderr', print_r($val, TRUE));
        }

        // You can find your endpoint's secret in your webhook settings
        $endpoint_secret = env('WEBHOOK_SECRET');

        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;

        try {
        $event = \Stripe\Webhook::constructEvent(
            $payload, $sig_header, $endpoint_secret
        );
        } catch(\UnexpectedValueException $e) {
        // Invalid payload
        http_response_code(400);
        exit();
        } catch(\Stripe\Exception\SignatureVerificationException $e) {
        // Invalid signature
        http_response_code(400);
        exit();
        }

        print_log("Passed signature verification!");
        http_response_code(200);
    }

}
