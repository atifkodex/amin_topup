<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Traits\ResponseTrait;
use App\Transaction;
use App\User;
// use Validator;
use App\Contacts;
use App\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use Codedge\Fpdf\Fpdf\Fpdf;
use Cache;
use Illuminate\Support\Collection;

class WebsiteController extends Controller
{
    use ResponseTrait;

    public function numberDetail(Request $request){
        $number = $request->number;
        $user = new UserController;
        $response = $user->networkOperator($request);
        $originalResponse = $response->getData()->data->network;
        return view('pages.website.recevier', ['data' => $originalResponse, 'number' => $number]);
    }

    public function amountDetail(Request $request){
        $number = $request->number;
        $user = new UserController;
        $response = $user->networkOperator($request);
        $originalResponse = $response->getData()->data->network;
        return view('pages.website.amount', ['data' => $originalResponse, 'number' => $number]);
    }
}
