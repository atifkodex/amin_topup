<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\ResponseTrait;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;



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

        // $user = User::where('id', $request->id)->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone_number' => $request->phone_number,
        //     'date_of_birth' => $request->date_of_birth,
        //     'profile' => $request->profile,
        //     'country' => $request->country
        // ]);
        if(isset($request->name) && !empty($request->name)){
            $user = User::where('id', $request->id)->update(['name' => $request->name]);
        }elseif(isset($request->email) && !empty($request->email)){
            $user = User::where('id', $request->id)->update(['email' => $request->email]);
        }elseif(isset($request->phone_number) && !empty($request->phone_number)){
            $user = User::where('id', $request->id)->update(['phone_number' => $request->phone_number]);
        }elseif(isset($request->date_of_birth) && !empty($request->date_of_birth)){
            $user = User::where('id', $request->id)->update(['date_of_birth' => $request->date_of_birth]);
        }elseif(isset($request->profile) && !empty($request->profile)){
            $user = User::where('id', $request->id)->update(['profile' => $request->profile]);
        }elseif(isset($request->country) && !empty($request->country)){
            $user = User::where('id', $request->id)->update(['country' => $request->country]);
        }else{
            return $this->sendError("At least one parameter must be provided.");
        }
        if ($user) {
            $success = User::where('id', $request->id)->first();
            return $this->sendResponse($success, 'updated Successfully');
        } else {
            return $this->sendError("Updation failed. Try again later");
        }
    }
}
