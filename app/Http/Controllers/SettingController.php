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
}
