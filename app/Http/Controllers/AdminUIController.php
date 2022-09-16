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
use Brian2694\Toastr\Facades\Toastr;



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
        ])->post('http://kodextech.net/amin-topup/api/login', $request->all());
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
        ])->post('http://kodextech.net/amin-topup/api/support', $data);
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
        ])->post('http://kodextech.net/amin-topup/api/dashboard', $data);
        $convertor = $response->body();
        $response = json_decode($convertor, true);
        $data = $response['data'];

        return view('pages.dashboard', ['data' => $data, 'token' => $token]);
    }

    public function settingDetails()
    {
        $value = Session::get('loginData');
        $token = $value['user']['token'];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/amin-topup/api/settings');
        $convertor = $response->body();

        $admin_response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/amin-topup/api/admins');
        $admin_convertor = $admin_response->body();
        $admin_response = json_decode($admin_convertor, true);

        $response = json_decode($convertor, true);

        $data = $response['data'];
        $admin = $admin_response['data']['users'];

        return view('pages.setting', ['data' => $data, 'admin' => $admin, 'value' => $value]);
    }

    public function reply(Request $request)
    {

        $value = Session::get('loginData');
        $token = $value['user']['token'];
        $data = $request->all();

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/amin-topup/api/reply_send', $data);
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
        ])->post('http://kodextech.net/amin-topup/api/users', $data);
        $convertor = $response->body();
        $response = json_decode($convertor, true);

        $data = $response['data']['users'];
        return view('pages.user', ['data' => $data]);
    }

    public function transactionList()
    {
        $value = Session::get('loginData');
        $token = $value['user']['token'];
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/amin-topup/api/transactions');
        $convertor = $response->body();
        $response = json_decode($convertor, true);
        $data = $response['data'];
        return view('pages.transaction', ['data' => $data, 'token' => $token]);
    }

    // public function transactionsList(Request $request){
    //     dd('alert');
    //     $value = Session::get('loginData');
    //     $token = $value['user']['token'];
    //     $response = Http::withHeaders([
    //         'Authorization' => 'Bearer ' . $token,
    //         'Content-Type' => 'application/json'
    //     ])->post('http://kodextech.net/amin-topup/public/api/transactions', $request->all());
    //     $convertor = $response->body();
    //     $response = json_decode($convertor, true);
    //     $data = $response['data'];
    //     return view('pages.transaction', ['data' => $data]);
    // }

    public function resolve(Request $request)
    {
        $value = Session::get('loginData');
        $token = $value['user']['token'];
        $data = $request->all();

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/amin-topup/api/resolve', $data);
        $convertor = $response->body();
        $response = json_decode($convertor, true);

        return redirect()->back();
    }

    public function create_and_update_admin(Request $request)
    {
        $value = Session::get('loginData');
        $token = $value['user']['token'];
        $data = $request->all();

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/amin-topup/api/create_admin', $data);
        $convertor = $response->body();
        $response = json_decode($convertor, true);

        return redirect()->back();
    }
    public function changePassword(Request $request)
    {
        $value = Session::get('loginData');
        $token = $value['user']['token'];
        $data = $request->all();

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/amin-topup/api/change_password', $data);
        $convertor = $response->body();
        $changeResponse = json_decode($convertor, true);
        if ($changeResponse['success'] == true) {
            Toastr::success('User Registered Successfully :)', 'Success');
            return redirect()->back();
        } else {
            Toastr::error('Something went wrong', 'Error');
            return redirect()->back();
        }
    }

    ///////update env stripe key ////////

    public function updateEnv($data = array())
    {
        if (!count($data)) {
            return;
        }

        $pattern = '/([^\=]*)\=[^\n]*/';

        $envFile = base_path() . '/.env';
        $lines = file($envFile);
        $newLines = [];
        foreach ($lines as $line) {
            preg_match($pattern, $line, $matches);

            if (!count($matches)) {
                $newLines[] = $line;
                continue;
            }

            if (!key_exists(trim($matches[1]), $data)) {
                $newLines[] = $line;
                continue;
            }

            $line = trim($matches[1]) . "={$data[trim($matches[1])]}\n";
            $newLines[] = $line;
        }

        $newContent = implode('', $newLines);
        file_put_contents($envFile, $newContent);
    }
}
