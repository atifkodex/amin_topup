<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\ResponseTrait;
// use App\Message;
use App\Message;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;
use App\Contacts;
use App\Transaction;
use App\OperatorNetwork;
use App\NotificationLog;
use App\Setting;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;





class AdminController extends Controller
{
    use ResponseTrait;
    ////////.......create admin and update.........//////
    public function create_admin(Request $request)
    {
        // $id = $request->id;
        // $id = User::find($request->id);

        $validator = Validator::make($request->all(), [

            'email' => 'string|email|max:255'

        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->errors()->all()), []);
        }

        if ($request->id) {
            $user = User::find($request->id);

            if (isset($request->name) && !empty($request->name)) {
                $user->name = $request->name;
            }
            if (isset($request->email) && !empty($request->email)) {
                $user->email = $request->email;
            }
            if (isset($request->phone_number) && !empty($request->phone_number)) {
                $user->phone_number = $request->phone_number;
            }
            if (isset($request->country) && !empty($request->country)) {
                $user->country = $request->country;
            }
            $userResult = $user->save();
            if ($userResult) {
                $success = User::where('id', $request->id)->first();
                return $this->sendResponse($success, 'updated Successfully');
            } else {
                return $this->sendError("Updation failed. Please Contact Support");
            }
        } else {

            $request['password'] = Hash::make($request['password']);
            $request['remember_token'] = Str::random(10);
            $request['type'] = $request['type'] ? $request['type'] : ('admin');
            $user = User::create($request->except('password_confirmation'));
            if ($user) {
                $response = 'Create Admin Successfully';
                return $this->sendResponse([], $response);
            } else {
                $response = "some thing went Wrong";
                return $this->sendError(($response), []);
            }
        }
    }
    ////////.......get user list.........//////
    public function usersList(Request $request)
    {

        $user = User::where('type', 'user')->with('transaction')->newQuery();

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
            $userIds = Transaction::whereDate('created_at', $request->date)->pluck('user_id')->toArray();
            $newusers = array_unique($userIds);
            if(!empty($newusers)){
                foreach($newusers as $newuser) {
                    $user = User::where('id', $newuser);
                }
            }
        }
        $user = $user->get();
        if (count($user) > 0) {
            foreach ($user as $nuser) {
                $date = Transaction::where('user_id', $nuser['id'])->orderBy('created_at', 'desc')->pluck('created_at')->first();
                if (!empty($date)) {
                    $nuser['last_transaction'] = $date->format('d-m-y');
                }
            }
        }

        if ($user) {

            return $this->sendResponse(['users' => $user, 'status' => 200], 'Getting Users Successfully');
        } else {
            $response = 'Field is not match to data';
            return $this->sendError($response, []);
        }
    }

    // Admin Dashboard API 
    public function adminDashboard(Request $request)
    {
        if (isset($request->date) && !empty($request->date)) {
            $date = date("Y-m-d", strtotime($request->date));
            // dd(is_string($requestDate));
        } else {
            $date = Carbon::now();
        }
        $allUsers = User::all()->count();
        $usersOnDate = User::whereDate('created_at', $date)->count();
        $sales = Transaction::whereDate('created_at', $date)->sum('topup_amount_usd');
        $salesAfn = Transaction::whereDate('created_at', $date)->sum('topup_amount');

        // For Graph Data 

        $allTransactionCount = Transaction::whereDate('created_at', $date)->count();
        $awcc = Transaction::whereDate('created_at', $date)->where('receiver_network', 'AWCC')->count();
        $roshan = Transaction::whereDate('created_at', $date)->where('receiver_network', 'Roshan')->count();
        $etisalat = Transaction::whereDate('created_at', $date)->where('receiver_network', 'Etisalat')->count();
        $salaam = Transaction::whereDate('created_at', $date)->where('receiver_network', 'Salaam')->count();
        $afghanTelecom = Transaction::whereDate('created_at', $date)->where('receiver_network', 'Afghan Telecom')->count();
        $mtn = Transaction::whereDate('created_at', $date)->where('receiver_network', 'MTN')->count();

        if ($awcc == 0) {
            $awccPercentage = 0;
        } else {
            $awccPercentage = ($allTransactionCount * 100) / $awcc;
        }
        if ($roshan == 0) {
            $roshanPercentage = 0;
        } else {
            $roshanPercentage = ($allTransactionCount * 100) / $roshan;
        }
        if ($etisalat == 0) {
            $etisalatPercentage = 0;
        } else {
            $etisalatPercentage = ($allTransactionCount * 100) / $etisalat;
        }
        if ($salaam == 0) {
            $salaamPercentage = 0;
        } else {
            $salaamPercentage = ($allTransactionCount * 100) / $salaam;
        }
        if ($afghanTelecom == 0) {
            $afghanTelecomPercentage = 0;
        } else {
            $afghanTelecomPercentage = ($allTransactionCount * 100) / $afghanTelecom;
        }
        if ($mtn == 0) {
            $mtnPercentage = 0;
        } else {
            $mtnPercentage = ($allTransactionCount * 100) / $mtn;
        }

        $latestTransaction = Transaction::orderBy('created_at', 'DESC')->take(15)->get();
        if (count($latestTransaction) > 0) {
            foreach ($latestTransaction as $transaction) {
                $transaction->user = User::where('id', $transaction['user_id'])->first();
                $transaction->networkImage = OperatorNetwork::where('operator_name', $transaction['receiver_network'])->pluck('operator_image')->first();
            }
        }

        // Generate Response 
        if (isset($request->date) && !empty($request->date)) {
            $success['date'] = $date;
        } else {
            $success['date'] = $date->format('d M Y');
        }
        $success['allUsers'] = $allUsers;
        $success['usersOnDate'] = $usersOnDate;
        $success['sales'] = round($sales, 2);
        $success['salesAfn'] = $salesAfn;
        $success['awccPercentage'] = $awccPercentage;
        $success['roshanPercentage'] = $roshanPercentage;
        $success['etisalatPercentage'] = $etisalatPercentage;
        $success['salaamPercentage'] = $salaamPercentage;
        $success['afghanTelecomPercentage'] = $afghanTelecomPercentage;
        $success['mtnPercentage'] = $mtnPercentage;
        $success['latestTransaction'] = $latestTransaction;
        return $this->sendResponse($success, 'Dashboard Details');
    }

    ////////....send reply api Admin....///////
    public function replySend(Request $request)
    {

        $request->validate([

            'email' => 'required|email',
            'message' => 'required',

        ]);
        $input = new Message;

        $input->sender_id = auth()->user()->id;

        $input->contacts_id = $request->contacts_id;
        $input->massege = $request->message;
        $input->email = $request->email;
        $input->save();
        if ($input->save()) {
                Message::create($input);

            //     //  Send mail to admin 
                Mail::send('contactMail', array(

                    'email' => $input['email'],
                    'subject' => 'Admin',
                    'messege' => $input['massege'],

                ), function ($message) use ($request) {

                    $message->to($request->email);

                    $message->from('admin@admin.com', 'Admin')->subject($request->get('subject'));
                });

            return $this->sendResponse([], 'send mail success');
        } else {
            return $this->sendError("Something went wrong.");
        }


        // return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }

    public function TransactionList(Request $request)
    {
        if (isset($request->network) && !empty($request->network)) {
            $transactions = Transaction::where('receiver_network', $request->network)->get();
        }
        if (isset($request->userphonenumber) && !empty($request->userphonenumber)) {
            $transactions = Transaction::where('receiver_number', $request->userphonenumber)->get();
        }
        if (isset($request->amountTopup) && !empty($request->amountTopup)) {
            $transactions = Transaction::where('topup_amount', $request->amountTopup)->get();
        }
        if (isset($request->date) && !empty($request->date)) {
            $transactions = Transaction::whereDate('created_at', $request->date)->get();
        }
        if (count($request->all()) == 0) {
            $transactions = Transaction::get();
        }
        if (isset($request->name) && !empty($request->name)) {
            $user = User::where('name', $request->name)->pluck('id')->first();
            $transactions = Transaction::where('user_id', $user)->get();
            if (count($transactions) > 0) {
                foreach ($transactions as $transaction) {
                    $transaction['senderName'] = $request->name;
                    $transaction['dateTime'] = $transaction['created_at']->format('y-m-d H:i:s');
                }
            } else {
                return $this->sendError("No Transaction found for user");
            }
        }
        if (count($transactions) > 0) {
            foreach ($transactions as $transaction) {
                $transaction['senderName'] = User::where('id', $transaction['user_id'])->pluck('name')->first();
                $transaction['dateTime'] = $transaction['created_at']->format('y-m-d H:i:s');
            }
            return $this->sendResponse($transactions, 'All transactions');
        } else {
            return $this->sendError("No Transaction found for user");
        }
    }

    public function adminNotifications()
{       $notification_type = ['contact' => 'contact', 'transaction' => "transaction"];
        $notifications = NotificationLog::where(function ($q) use ($notification_type) {
            $q->Where('notification_type', '=', $notification_type['contact'])
                ->where('notification_status', "=", 0);
        })->orwhere(function ($q) use ($notification_type) {
            $q->Where('notification_type', '=', $notification_type['transaction'])
                ->where('notification_status', "=", 0);
        })->get();
        // $notifications = NotificationLog::where(['notification_type'=> 'contact'])->orwhere(['notification_type'=> 'transaction'])->orderBy('created_at', 'DESC')->get();
        if (count($notifications) > 0) {
            foreach ($notifications as $notification) {
                if ($notification['notification_type'] == 'contact') {
                    $userName = User::where('id', $notification['user_id'])->pluck('name')->first();
                    $notification['message'] = $userName . " sent a contact request.";
                } elseif ($notification['notification_type'] == 'transaction') {
                    $userName = User::where('id', $notification['user_id'])->pluck('name')->first();
                    $transaction = Transaction::where('id', $notification['transaction_id'])->first();
                    $notification['message'] = $userName . ' made a transaction of ' . $transaction->topup_amount;
                }
            }
            NotificationLog::where('notification_type', 'contact')->orwhere('notification_type', 'transaction')->update(['notification_status' => 1]);
            return $this->sendResponse($notifications, "list of notifications for admin");
        } else {
            return $this->sendError("No notifications found for user");
        }
    }

    public function resolve(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->errors()->all()), []);
        }
        $resolve = Contacts::where('id', $request->id)->update(['status' => 1]);
        if (isset($resolve)) {
            echo 'Status Update Successfully';
        } else {
            echo 'Status Update Fail';
        }
    }
    public function admin_list()
    {
        $admin = User::where('type', 'admin')->get();
        if ($admin) {

            return $this->sendResponse(['users' => $admin, 'status' => 200], 'Getting Admin data Successfully');
        } else {
            $response = 'Gettig admin data Failed';
            return $this->sendResponse([], $response);
        }
    }
    public function publishKeys(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'publish_key' => 'string',
            'secret_key' => 'string',
            'client_id' => 'string',
            'url' => 'string'
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->errors()->all()), []);
        }

        $setting = Setting::where('id', 1)->first();
        if (empty($setting)) {
            $setting = new Setting;
        }
        $setting->publishable_key = $request->publish_key;
        $setting->secret_key = $request->secret_key;
        $setting->client_id = $request->client_id;
        $setting->url = $request->url;
        $status = $setting->save();
        if ($status) {
            $data = [
                'STRIPE_SECRET' => $setting->secret_key,
                'STRIPE_KEY' => $setting->publishable_key
            ];
            \Artisan::call('cache:clear');
            $respone = $this->update_env($data);
            if ($respone) {
                return $this->sendResponse($setting, "Data Updated Successfully");
            }
        }
    }

    public function update_env($data = [])
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            foreach ($data as $key => $value) {
                file_put_contents($path, str_replace(
                    $key . '=' . env($key),
                    $key . '=' . $value,
                    file_get_contents($path)
                ));
            }
            return true;
        }
    }
}
