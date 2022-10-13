<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Traits\ResponseTrait;
use App\Transaction;
use App\User;
// use Validator;
use App\Contacts;
use App\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use Codedge\Fpdf\Fpdf\Fpdf;
use Cache;
use Illuminate\Support\Collection;
use App\Http\Requests\Request\CreditCardRequest;

class WebsiteController extends Controller
{
    use ResponseTrait;

    public function numberDetail(Request $request){
        $number = $request->number;
        $user = new UserController;
        $response = $user->networkOperator($request);
        $originalResponse = $response->getData()->data->network;
        return view('pages.website.recevier', ['data' => $originalResponse, 'number' => $number]);
    }

    public function amountDetail(Request $request){
        $number = $request->number;
        $user = new UserController;
        $response = $user->networkOperator($request);
        $originalResponse = $response->getData()->data->network;
        return view('pages.website.amount', ['data' => $originalResponse, 'number' => $number]);
    }

    public function userLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->messages())->withInput();
        }
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post(\config('url.url').'/api/login', $request->all());
        $responseBody = $response->body();
        $userLoginData = json_decode($responseBody, true);
        if ($userLoginData['success'] == false) {
            session::flash('message', $userLoginData['message']);
            return redirect()->back();
        } elseif ($userLoginData['success'] == true) {
            session::put('UserloginData', $userLoginData['data']);
            return view('pages.website.home');
        }
    }

    public function inwebLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->messages())->withInput();
        }
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post(\config('url.url').'/api/login', $request->all());
        $responseBody = $response->body();
        $userLoginData = json_decode($responseBody, true);
        if ($userLoginData['success'] == false) {
            session::flash('message', $userLoginData['message']);
            return redirect()->back();
        } elseif ($userLoginData['success'] == true) {
            session::put('UserloginData', $userLoginData['data']);
            $value = Session::get('UserloginData');
            $token = $value['user']['token'];
            $number = $request->number;
            $user = new UserController;
            $response = $user->networkOperator($request);
            $originalResponse = $response->getData()->data->network;
            return view('pages.website.order-summary', ['data' => $originalResponse, 'number' =>$number, 'token' => $token]);
        }
    }

    public function userSignup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required|min:6',
            'phone_number' => 'required',
            'country' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->messages())->withInput();
        }
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post(\config('url.url').'/api/register', $request->all());
        $responseBody = $response->body();
        $userSignupData = json_decode($responseBody, true);
        if ($userSignupData['success'] == false) {
            session::flash('message', $userSignupData['message']);
            return redirect()->back();
        } elseif ($userSignupData['success'] == true) {
            return view('pages.website.auth.main-login');
        }
    }

    public function inwebSignup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required|min:6',
            'phone_number' => 'required',
            'country' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->messages())->withInput();
        }
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post(\config('url.url').'/api/register', $request->all());
        $responseBody = $response->body();
        $userSignupData = json_decode($responseBody, true);
        if ($userSignupData['success'] == false) {
            session::flash('message', $userSignupData['message']);
            return redirect()->back();
        } elseif ($userSignupData['success'] == true) {
            $number = $request->number;
            $user = new UserController;
            $response = $user->networkOperator($request);
            $originalResponse = $response->getData()->data->network;
            return view('pages.website.auth.login', ['data' => $originalResponse, 'number' => $number]);
        }
    }

    public function resetPassword(Request $request)
    {
        $value = Session::get('UserloginData');
        dd($value);
        // $token = $value['user']['token'];
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->messages())->withInput();
        }
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $value,
            'Content-Type' => 'application/json'
        ])->post(\config('url.url').'/api/reset_password', $request->all());
        $responseBody = $response->body();
        $passData = json_decode($responseBody, true);
        dd($passData);
        // if ($passData['success'] == false) {
        //     session::flash('message', $passData['message']);
        //     return redirect()->back();
        // } elseif ($passData['success'] == true) {
        //     return view('pages.website.auth.main-login');
        // }
    }

    public function orderSummary(Request $request)
    {
        
        $number = $request->number;
        $user = new UserController;
        $response = $user->networkOperator($request);
        $originalResponse = $response->getData()->data->network;
        if(Session::has('UserloginData')){
            $value = Session::get('UserloginData');
            $token = $value['user']['token'];
            return view('pages.website.order-summary', ['data' => $originalResponse, 'number' => $number, 'token' => $token]);
        }else{
            return view('pages.website.auth.login', ['data' => $originalResponse, 'number' => $number]);
        }
    }

    public function logoutUser(){
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        Session::flush();
        Cache::flush();
        return redirect('/');
    }

    public function topupHistory() 
    {
        $value = Session::get('UserloginData');
        $token = $value['user']['token'];
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post(\config('url.url') . '/api/all_topups');
        $convertor = $response->body();
        $historyResponse = json_decode($convertor, true);
        if($historyResponse['success'] == false) {
            session::flash('historyMessage', "You have not created a topup yet!");
            return view('pages.website.report');
        } elseif ($historyResponse['success'] == true) {
            return view('pages.website.report', ['data' => $historyResponse['data']]);
        }
    }

    public function topupDetail(Request $request, $id)
    {
        $value = Session::get('UserloginData');
        $token = $value['user']['token'];
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post(\config('url.url') . '/api/transaction_detail', ['transaction_id' => $id]);
        $convertor = $response->body();
        $detailResponse = json_decode($convertor, true);
        return view('pages.website.transaction', ['data' => $detailResponse['data']]);
    }

    public function userProfile()
    {
        $loginData = Session::get('UserloginData');
        return view('pages.website.profile', ['data' => $loginData['user']]);
    }

    public function editProfile(Request $request)
    {
        $value = Session::get('UserloginData');
        $token = $value['user']['token'];
        $data = $request->all();
        if ($request->has('image')) {
            $file = $request->file('image');

            $image_path = $file->getPathname();
            $image_mime = $file->getmimeType();
            $image_org  = $file->getClientOriginalName();

            $client = new \GuzzleHttp\Client();
            $imageresponse = $client->request('POST', \config('url.url') . '/api/image_link', [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . $token,
                ],
                'multipart' => [
                    [
                        'name'     => 'image',
                        'filename' => $image_org,
                        'Mime-Type' => $image_mime,
                        'contents' => fopen($image_path, 'r'),
                    ],

                ],
            ]);
            $imageconvertor = $imageresponse->getBody();
            $imageResponse = json_decode($imageconvertor, true);
            $profileImage = $imageResponse['data'];
        }

        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post(\config('url.url') . '/api/update', ['profile' => $profileImage, 
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'date_of_birth' => $request->date_of_birth,
            'country' => $request->country,
        'id' => $request->id]);
        $convertor = $response->body();
        $profileResponse = json_decode($convertor, true);
        if($profileResponse['success'] == true){
            return view('pages.website.profile', ['data' => $profileResponse['data']]);
        }
    }

    public function payTopup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_name' => 'required|string',
            'card_num' => 'required|numeric|digits:14',
            'card_expiry_month' => 'required|numeric|digits:2',
            'card_expiry_year' => 'required|numeric|digits:4',
            'card_cvc' => 'required|numeric|min:3',
            'amount' => 'required',
            'code' => 'required',
            'number' => 'required',
            'tid' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->messages())->withInput();
        }

        $amount = round($request->amount, 2);
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        // create customer 
        $customer = $stripe->customers->create([
            'description' => 'Test Customer',
        ]);

        // create token 
        $stripe->tokens->create([
            'card' => [
                'number' => $request->card_num,
                'exp_month' => $request->card_expiry_month,
                'exp_year' => $request->card_expiry_year,
                'cvc' => $request->card_cvc,
                'name' => $request->card_name,
            ],
            'customer' => $customer->id,
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

        dd($paymentIntent);
        // $pay_int_res = [
        //     'result' => 'Success',
        //     'message' => 'Payment intent successfully!',
        //     'payment_intent' => $paymentIntent->client_secret,
        //     'ephemeral_key' => $ephemeralKey->secret,
        //     'customer_id' => $customer->id,
        //     'publishablekey' => env('STRIPE_KEY'),
        //     'secret' => env('STRIPE_SECRET'),
        //     'id' => $paymentIntent->id
        // ];

    }
}
