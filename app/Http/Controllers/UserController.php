<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
use Validator;

class UserController extends Controller
{
    public function allUsers()
    {
        $users = User::all();
        return $users;
    }
}
