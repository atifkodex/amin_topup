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
}
