<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Traits\ResponseTrait;
// use Validator;
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
        }
        return redirect()->route('dashboard');
    }

    public function support(Request $request)
    {
        $value = Session::get('loginData');
        $token = $value['token'];
        $data = $request->all();

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/amin-topup/public/api/admin/support', $data);
        $convertor = $response->body();
        $response = json_decode($convertor, true);
        dd($response);

        $data = $response['data'];

        return view(('pages.support'), compact('data'));
    }
    
    public function dashboardDetails(Request $request)
    {

    }
}
