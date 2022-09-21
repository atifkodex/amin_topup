<?php

namespace App\Http\Controllers;

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
        return view('pages.support', ['data' => $data, 'token' => $token]);
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

        return view('pages.setting', ['data' => $data, 'admin' => $admin, 'value' => $value, 'token' => $token]);
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
        return view('pages.user', ['data' => $data, 'token' => $token]);
    }

    public function users_filter(Request $request)
    {
        $value = Session::get('loginData');
        $token = $value['user']['token'];
        DB::connection()->enableQueryLog();
        // $user = User::where('type', 'user')->with('transaction')->newQuery();
        $user = (new User())->newQuery();

        // Check either search by day or month
        if ($request->has('name')  && !empty($request->name)) {
            $user->where('name', $request->name);
        }
        if ($request->has('email') && !empty($request->email)) {
            $user->where('email', $request->email);
        }
        if ($request->has('country') && !empty($request->country)) {
            $user->where('country', $request->country);
        }
        if ($request->has('phone_number')  && !empty($request->phone_number)) {
            $user->where('phone_number', $request->phone_number);
        }
        if ($request->has('date') && !empty($request->date)) {

            $user->whereDate('created_at', $request->date);
        }
        $user = $user->where('type', 'user')->with('transaction')->get();
        if (count($user) > 0) {
            foreach ($user as $nuser) {
                $date = Transaction::where('user_id', $nuser['id'])->orderBy('created_at', 'desc')->pluck('created_at')->first();
                if (!empty($date)) {
                    $nuser['last_transaction'] = $date->format('y-m-d');
                }
            }
        }
        if ($user) {

            // return $this->sendResponse(['users' => $user, 'status' => 200], 'Getting Users Successfully');
            return view('pages.user', ['data' => $user, 'token' => $token]);
        } else {
            $response = 'Field is not match to data';
            return $this->sendError($response, []);
        }
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
            return redirect()->back()->with('message','Password updated Successfully');
        } else {
            return redirect()->back()->with('error','Something went wrong, try again');
        }
    }

    public function updateEnv(Request $request)
    {
        $value = Session::get('loginData');
        $token = $value['user']['token'];
        $data = $request->all();
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post('http://kodextech.net/amin-topup/api/admin_keys', $data);
        $convertor = $response->body();
        $changeResponse = json_decode($convertor, true);
        if ($changeResponse['success'] == true) {
            return redirect()->back()->with('message','Data added Successfully');
        } else {
            return redirect()->back()->with('error','There was an error.');
        }
    }
    public function downloadPdf(Request $request)
    {
        // echo public_path();
        // die;

        $data = $request->all();
        $pdf = new FPDF();
        $pdf->AddPage();

        $pdf->SetFont('arial', '', 12);
        $pdf->Cell(0, 10, "Registration Details", 1, 1, 'C');
        $pdf->Cell(20, 10, "Roll No", 1, 0);
        $pdf->Cell(45, 10, "First Name", 1, 0);
        $pdf->Cell(45, 10, "Last Name", 1, 0);
        $pdf->Cell(0, 10, "Email", 1, 1);

        $pdf->Cell(20, 10, 1, 1, 0);
        $pdf->Cell(45, 10, 'zeeshan', 1, 0);
        $pdf->Cell(45, 10, 'khan', 1, 0);
        $pdf->Cell(0, 10, 'zeeshan@gmail.com', 1, 0);

        $file = 'C:\xampp\htdocs\amin-topup\public' . '.pdf';
        $pdf->output($file, 'D');
        // $pdf->save();
    }
}
