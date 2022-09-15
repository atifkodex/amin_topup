<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUIController;
use App\Http\Middleware\AdminAuth;
use App\Http\Middleware\IsAdmin;

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

Route::post('/admin_login', [AdminUIController::class, 'adminLogin'])->name('adminLogin');

Route::middleware([AdminAuth::class])->group(function () {
    Route::middleware([IsAdmin::class])->group(function () {
        Route::post('/support', [AdminUIController::class, 'support'])->name('/support');
        Route::get('/dashboard', [AdminUIController::class, 'dashboardDetails'])->name('dashboard-details');
        Route::get('/setting', [AdminUIController::class, 'settingDetails'])->name('setting-details');
        Route::get('/support_page', [AdminUIController::class, 'support'])->name('support-page');
        Route::post('/admin_reply', [AdminUIController::class, 'reply'])->name('admin.reply');
        // Route::post('/user_list', [AdminUIController::class, 'user_list'])->name('admin.user_list');
        Route::get('/transactions', [AdminUIController::class, 'transactionList'])->name('transactionList');
        // Route::post('/transaction_list', [AdminUIController::class, 'transactionsList'])->name('transactionsList');
        Route::get('/user', [AdminUIController::class, 'user_list'])->name('user');
        Route::post('/resolve_contact', [AdminUIController::class, 'resolve'])->name('resolve_contact');
        Route::get('/change_password', [AdminUIController::class, 'changePassword'])->name('changePassword');
    });
});

Route::get('/', function () {
    return view('pages.auth.login');
});
Route::get('/login', function () {
    return view('pages.auth.login');
});



Route::get('/sign-up', function () {
    return view('pages.auth.sign-up');
});

Route::get('/sucess', function () {
    return view('pages.sucess');
});

Auth::routes();
