<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\ResponseTrait;
use App\Transaction;
use Illuminate\Support\Str;
use App\Contacts;
use App\NotificationLog;
use App\OperatorNetwork;
use App\TopupDetails;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    use ResponseTrait;

    public function notificationList(){
        $loginUserId = Auth::user()->id;
        $notifications = NotificationLog::where('user_id', $loginUserId)->get();
        if(count($notifications) > 0){
            foreach( $notifications as $notification ){
                if( $notification->notification_type == 'contact' ){
                    $message = "Your contact request has been sent to Admin.";
                }
                if( $notification->notification_type == 'profile_update' ){
                    $message = "Your profile has been successfully updated.";
                }
                if( $notification->notification_type == 'transaction' ){
                    $receiver_detail = Transaction::where('id', $notification->transaction_id)->first();
                    $message = "Your transaction of " . $receiver_detail->topup_amount . " has been successfully sent to " . $receiver_detail->receiver_number;
                }
                $notification->message = $message;
            }
            return $this->sendResponse($notifications,"List of notifications");
        }else{
            return $this->sendError("No Notifications available");
        }
    }

    public function createImageLink(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(',', $validator->errors()->all()), null);
        }

        if ($request->hasFile('image')) {
            $destinationPath = base_path() . '/public/user_images/';
            $uploadPath =  str_replace("/var/www/html", "", $destinationPath);
            // if (!is_dir($destinationPath)) {
            //     mkdir($destinationPath, 755, true);
            // }
            $image = $request->file('image');

            $name = time() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $name);
            $image = "kodextech.net" . $uploadPath . $name;
            return $this->sendResponse($image,"image path generated successfully");
        }
    }

    public function settingsData(Request $request)
    {
        $network = OperatorNetwork::get();
        if(count($network) > 0){
            foreach($network as $topupData){
                $opeartorId = $topupData['id'];
                $opeartorName = $topupData['operator_name'];
                $topup = TopupDetails::where('operator_id', $opeartorId)->get();
                if (count($topup) > 0) {
                    foreach ($topup as $data) {
                        $calc = ($data['denomination'] * 10) /100;
                        $data['afterTax'] = $data['denomination'] - $calc;

                        $aminPercent = ($data['topup_usd'] * $data['fee_percentage']) / 100;
                        $withAminFees = $aminPercent + $data['topup_usd'];
                        $data['TotalPayable'] = $withAminFees + $data['stripe_fee'];
                    }
                }
                $topupData['operator_data'] = $topup;
            }
            return $this->sendResponse($network,"All topup Details");
        }
        return $this->sendError("No Data available");

    }

    public function updateOperator(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:topup_details,id'
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->errors()->all()), []);
        }

        $operator = TopupDetails::find($request->id);
        $operator->denomination = $request->denomination;
        $operator->topup_usd = $request->topup_usd;
        if(isset($request->exchange_rate) && !empty($request->exchange_rate)) {
            $operator->exchange_rate = $request->exchange_rate;
        }
        if(isset($request->fee_percentage) && !empty($request->fee_percentage)) {
            $operator->fee_percentage = $request->fee_percentage;
        }
        if(isset($request->stripe_fee) && !empty($request->stripe_fee)) {
            $operator->stripe_fee = $request->stripe_fee;
        }

        $operator->operator_id = $request->operator_id;
        
        if(isset($request->product_code_topup) && !empty($request->product_code_topup)) {
            $operator->product_code_topup = $request->product_code_topup;
        }
        if(isset($request->product_code_stripe) && !empty($request->product_code_stripe)) {
            $operator->product_code_stripe = $request->product_code_stripe;
        }
        $success = $operator -> save();
        if ($success){
            return $this->sendResponse($network,"Data saved successfully");
        }else{
            return $this->sendError("Something went wrong");
        }

    }
}
