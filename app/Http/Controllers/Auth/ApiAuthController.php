<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\ResponseTrait;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\NotificationLog;
use Dotenv\Validator as DotenvValidator;
use Nette\Utils\Validators;

class ApiAuthController extends Controller
{
    use ResponseTrait;
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    //////.....Register.........////
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->errors()->all()), []);
        }
        $request['password'] = Hash::make($request['password']);

        $request['remember_token'] = Str::random(10);
        $request['type'] = $request['type'] ? $request['type'] : ('user');
        $user = User::create($request->except('password_confirmation'));
        if ($user) {
            $token = $user->createToken('Laravel Password Grant Client')->accessToken;
            $user['token'] = $token;
            return $this->sendResponse(['user' => $user, 'status' => 200], 'Register Successfully');
        } else {
            $response = "some thing went Wrong";
            return $this->sendError(($response), []);
        }
    }

    /////////.........login....////

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->errors()->all()), []);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $user['token'] = $token;
                return $this->sendResponse(['user' => $user, 'status' => 200], 'Login Successfully');
            } else {
                $response = "Password mismatch";
                return $this->sendError(($response), []);
            }
        } else {
            $response = 'User does not exist';
            return $this->sendError(($response), []);
        }
    }

    ///////////........logout.......//////

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();
        $response = 'You have been successfully logged out!';
        return $this->sendResponse([], $response);
    }

    //////....update user......./////// 
    public function update_user(Request $request)
    {
        $user_auth = auth()->user();
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'email' => 'email|unique:users,email,' . $user_auth->id
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->errors()->all()), []);
        }
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
        if (isset($request->profile) && !empty($request->profile)) {
            $user->profile = $request->profile;
        }
        if (isset($request->date_of_birth) && !empty($request->date_of_birth)) {
            $user->date_of_birth = $request->date_of_birth;
        }
        if (isset($request->country) && !empty($request->country)) {
            $user->country = $request->country;
        }

        $userResult = $user->save();

        if ($userResult) {
            // Save data for notification 
            $notification = new NotificationLog;
            $notification->user_id = auth()->user()->id;
            $notification->notification_type = "profile_update";
            $notification->notification_status = 0;
            $notification->save();

            $success = User::where('id', $user_auth->id)->first();
            return $this->sendResponse($success, 'updated Successfully');
        } else {
            return $this->sendError("Updation failed. Please Contact Support");
        }
    }
}
