<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\ResponseTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;
use App\Transaction;



class AdminController extends Controller
{
    use ResponseTrait;
    ////////.......create admin.........//////
    public function create_admin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:6'
        ]);

        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->errors()->all()), []);
        }
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
    ////////.......get user list.........//////
    public function usersList(Request $request)
    {

        $user = (new User())->newQuery()->where('type', 'user');
        // Check either search by day or month
        if ($request->has('name')) {
            $user->where('name', $request->name);
        }
        if ($request->has('email')) {
            $user->where('email', $request->email);
        }
        if ($request->has('country')) {
            $user->where('country', $request->country);
        }
        if ($request->has('phone_number')) {
            $user->where('phone_number', $request->phone_number);
        }
        if ($request->has('date')) {

            $user->whereDate('created_at', $request->date);
        }
        if ($request->has('time')) {
            $user->whereTime('created_at', $request->time);
        }

        $user = $user->get();
        if (count($user) == 0) {
            $response = 'Field is not match to data';
            return $this->sendError($response, []);
        } else {
            return $this->sendResponse(['users' => $user, 'status' => 200], 'Getting Users Successfully');
        }
    }

    // Admin Dashboard API 
    public function adminDashboard(Request $request)
    {
        if(isset($request->date) && !empty($request->date)){
            $date = $request->date;
        }else{
            $date = Carbon::now();
        }
        $formatedDate = 
        $allUsers = User::all()->count();
        $usersOnDate = User::whereDate('created_at', $date)->get();
        $sales = Transaction::whereDate('created_at', $date)->sum('topup_amount_usd');

        // For Graph Data 
        $allTransactionCount = Transaction::whereDate('created_at', $date)->count();
        $awcc = Transaction::whereDate('created_at', $date)->where('receiver_network', 'AWCC')->count();
        $roshan = Transaction::whereDate('created_at', $date)->where('receiver_network', 'Roshan')->count();
        $etisalat = Transaction::whereDate('created_at', $date)->where('receiver_network', 'Etisalat')->count();
        $salaam = Transaction::whereDate('created_at', $date)->where('receiver_network', 'Salaam')->count();
        $afghanTelecom = Transaction::whereDate('created_at', $date)->where('receiver_network', 'Afghan Telecom')->count();
        $mtn = Transaction::whereDate('created_at', $date)->where('receiver_network', 'MTN')->count();

        if($awcc == 0){
            $awccPercentage = 0;
        }else{
            $awccPercentage = ($allTransactionCount * 100) / $awcc;
        }
        if($roshan == 0){
            $roshanPercentage = 0;
        }else{
            $roshanPercentage = ($allTransactionCount * 100) / $awcc;
        }
        if($etisalat == 0){
            $etisalatPercentage = 0;
        }else{
            $etisalatPercentage = ($allTransactionCount * 100) / $awcc;
        }
        if($salaam == 0){
            $salaamPercentage = 0;
        }else{
            $salaamPercentage = ($allTransactionCount * 100) / $awcc;
        }
        if($afghanTelecom == 0){
            $afghanTelecomPercentage = 0;
        }else{
            $afghanTelecomPercentage = ($allTransactionCount * 100) / $awcc;
        }
        if($mtn == 0){
            $mtnPercentage = 0;
        }else{
            $mtnPercentage = ($allTransactionCount * 100) / $awcc;
        }

        $latestTransaction = Transaction::orderBy('created_at', 'DESC')->take(15)->get();

        // Generate Response 
        $success['date'] = $date->format('d M Y'); 
        $success['allUsers'] = $allUsers; 
        $success['sales'] = $sales; 
        $success['awccPercentage'] = $awccPercentage; 
        $success['roshanPercentage'] = $roshanPercentage; 
        $success['etisalatPercentage'] = $etisalatPercentage; 
        $success['salaamPercentage'] = $salaamPercentage; 
        $success['afghanTelecomPercentage'] = $afghanTelecomPercentage; 
        $success['mtnPercentage'] = $mtnPercentage; 
        $success['latestTransaction'] = $latestTransaction; 
        return $this->sendResponse($success, 'Dashboard Details');

    }
}
