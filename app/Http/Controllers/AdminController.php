<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\ResponseTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;



class AdminController extends Controller
{
    use ResponseTrait;

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
}
