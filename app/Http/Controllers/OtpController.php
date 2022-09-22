<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use App\TopupDetails;
use App\OperatorNetwork;
use App\User;
use Validator;
use Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOTPMail;

class OtpController extends Controller
{
    use ResponseTrait;

    public function sendOTP(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email'
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->messages()->all()));
        }
        $otp = rand(1000,9999);
        Log::info("otp = ".$otp);
        $user = User::where('email','=',$request->email)->update(['otp' => $otp]);
        if($user){
        \Mail::to($request->email)->send(new SendOTPMail($otp));
            return $this->sendResponse([], 'OTP sent successfully.');
        }
        else{
            return response(["status" => 401, 'message' => 'Invalid']);
        }
    }

    public function verifyOtp(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
            'otp' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->messages()->all()));
        }
        $user  = User::where([['email','=',$request->email],['otp','=',$request->otp]])->first();
        if($user){
            auth()->login($user, true);
            User::where('email','=',$request->email)->update(['otp' => null]);
            $success['user'] = auth()->user();
            $success['user']['token'] = auth()->user()->createToken('authToken')->accessToken;
            
            // return response(["status" => 200, "message" => "Success", 'user' => auth()->user(), 'access_token' => $accessToken]);
            return $this->sendResponse($success, 'verified successfulyy');
        }
        else{
            return response(["status" => 401, 'message' => 'Invalid']);
        }
    }

    public function resetPassword(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->messages()->all()));
        }
        $password = Hash::make($request->password);
        $user  = User::where('email', $request->email)->update(['password' => $password]);
        if($user){
            return $this->sendResponse([], 'Password updated successfully.');
        }else{
            return $this->sendError("something went wrong");
        }
    }
}
