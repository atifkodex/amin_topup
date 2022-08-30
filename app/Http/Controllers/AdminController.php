<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\ResponseTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;



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

        //  else {
        //     $response = 'Gettig Users  Failed';
        //     return $this->sendError($response, []);
        // }
    }
}
