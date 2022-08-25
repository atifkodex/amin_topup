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
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->errors()->all()), null);
        }
        $request['password'] = Hash::make($request['password']);

        $request['remember_token'] = Str::random(10);
        $request['type'] = $request['type'] ? $request['type'] : ('user');
        $user = User::create($request->except('password_confirmation'));
        if ($user) {
            $token = $user->createToken('Laravel Password Grant Client')->accessToken;
            $user['token'] = $token;
            return $this->sendResponse(['user' => $user, 'status' => 200], null);
        } else {
            $response = "some thing went Wrong";
            return $this->sendError(($response), null);
        }
    }


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
            return $this->sendError(implode(",", $validator->errors()->all()), null);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $user['token'] = $token;
                // $response =  $token;
                return $this->sendResponse(['user' => $user, 'status' => 200], null);
            } else {
                $response = "Password mismatch";
                return $this->sendError(($response), null);
            }
        } else {
            $response = 'User does not exist';
            return $this->sendError(($response), null);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();
        $response = 'You have been successfully logged out!';
        return $this->sendResponse(null, $response);
    }

    //////....update user......./////// 
    public function update()
    {
    }
}
