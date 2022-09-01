<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use App\TopupDetails;
use App\OperatorNetwork;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    use ResponseTrait;

    public function allUsers()
    {
        $users = User::all();
        return $this->sendResponse($users, 'List of users');
    }

    public function networkOperator(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'number' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->messages()->all()));
        }
        $number = $request->number;
        $checkNumber = substr($number, 3);
        if($number == 930 . $checkNumber){
            $number = substr($number, 3);
        }else{
            $number = substr($number, 2);
        }
        $code = substr($number,0, 2);
        if($code == 70 || $code == 71)
        {
            $operatorName = "AWCC";
        }
        elseif($code == 72 || $code == 79)
        {
            $operatorName = "Roshan";
        }
        elseif($code == 73 || $code == 78)
        {
            $operatorName = "Etisalat";
        }
        elseif($code == 74)
        {
            $operatorName = "Salaam";
        }
        elseif($code == 75 || $code == 20)
        {
            $operatorName = "Afghan Telecom";
        }
        elseif($code == 76 || $code == 77)
        {
            $operatorName = "MTN";
        }
        else{
            return $this->sendError("Wrong Operator Code Entered");
        }
        $network = OperatorNetwork::where('operator_name', $operatorName)->first();
        $details = TopupDetails::where('operator_id', $network->id)->get();
        if(count($details) > 0){
            foreach( $details as $detail)
            {
                $aminFees = ($detail['topup_usd'] * $detail['fee_percentage']) / 100;
                $amountAfterAminFees = $detail['topup_usd'] + $aminFees;
                $detail->totalAmount = $detail['stripe_fee'] + $amountAfterAminFees;
            }
        }
        $network->details = $details;
        $success = [];
        $success['network'] = $network;

        return $this->sendResponse($success, 'Operator Data');
    }

    public function userProfile(){
        $loginUserId = Auth::user()->id;
        $user = User::where('id', $loginUserId)->first();
        return $this->sendResponse($user, 'User Data');
    }
    
}