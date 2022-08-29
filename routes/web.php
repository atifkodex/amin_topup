<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.auth.login');
});


Route::get('/sign-up', function () {
    return view('pages.auth.sign-up');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name("dashboard");

Route::get('/setting', function () {
    return view('pages.setting');
});

Route::get('/support', function () {
    return view('pages.support');
});

Route::get('/user', function () {
    return view('pages.user');
});
Route::get('/transaction', function () {
    return view('pages.transaction');
});

Auth::routes();


