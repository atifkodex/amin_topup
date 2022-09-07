<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Traits\ResponseTrait;
// use Validator;
use App\Contacts;
use App\Message;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


// use Session;

class AdminUIController extends Controller
{
    use ResponseTrait;


    // Admin Login 
    public function adminLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            session::flash('message', $validator);
            return Redirect::back()->withErrors($validator);
        }
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/amin-topup/public/api/login', $request->all());
        $responseBody = $response->body();
        $test = json_decode($responseBody, true);
        if ($test['success'] == false) {

            session::flash('message', $test['message']);
            return redirect()->back();
        } elseif ($test['success'] == true) {
            session::put('loginData', $test['data']);
            return redirect()->route('dashboard-details');
        }
    }
    ///////........show user contact list.....///
    public function support(Request $request)
    {

        $value = Session::get('loginData');

        $token = $value['user']['token'];
        $data = $request->all();

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/amin-topup/public/api/admin/support', $data);
        $convertor = $response->body();
        $response = json_decode($convertor, true);

        $data = $response['data']['users'];
        // dd($data);
        return view('pages.support', ['data' => $data]);
    }

    public function dashboardDetails(Request $request)
    {

        $value = Session::get('loginData');
        $token = $value['user']['token'];
        $data = $request->all();


        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/amin-topup/public/api/admin/dashboard', $data);
        $convertor = $response->body();
        $response = json_decode($convertor, true);
        $data = $response['data'];

        return view(('pages.dashboard'), compact('data'));
    }

    public function settingDetails()
    {
        $value = Session::get('loginData');
        $token = $value['user']['token'];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/amin-topup/public/api/admin/settings',);
        $convertor = $response->body();
        $response = json_decode($convertor, true);
        $data = $response['data'];
        return view(('pages.setting'), compact('data'));
    }

    public function reply(Request $request)
    {
        // dd($request->all());
        $value = Session::get('loginData');
        $token = $value['user']['token'];
        $data = $request->all();

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/amin-topup/public/api/reply_send', $data);
        $convertor = $response->body();
        $response = json_decode($convertor, true);
        // dd($response);
        // $data = $response['data'];


        return redirect()->back();
    }
    public function user_list(Request $request)
    {


        $value = Session::get('loginData');

        $token = $value['user']['token'];
        $data = $request->all();

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/amin-topup/public/api/admin/users', $data);
        $convertor = $response->body();
        $response = json_decode($convertor, true);

        $data = $response['data']['users'];
        // dd($data);
        return view('pages.transaction', ['data' => $data]);
    }
}
