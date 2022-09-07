<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUIController;
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

// Route::group(['middleware' => ['auth']], function () {
Route::middleware([IsAdmin::class])->group(function () {
    Route::post('/support', [AdminUIController::class, 'support'])->name('/support');
    Route::get('/dashboard', [AdminUIController::class, 'dashboardDetails'])->name('dashboard-details');
    Route::get('/setting', [AdminUIController::class, 'settingDetails'])->name('setting-details');
    Route::get('/support_page', [AdminUIController::class, 'support'])->name('support-page');
    Route::post('/admin_reply', [AdminUIController::class, 'reply'])->name('admin.reply');
    Route::post('/user_list', [AdminUIController::class, 'user_list'])->name('admin.user_list');
    Route::get('/transactions', [AdminUIController::class, 'transactionList'])->name('transactionList');
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

// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// })->name("dashboard");

// Route::get('/setting', function () {
//     return view('pages.setting');
// });

// Route::get('/support', function () {
//     return view('pages.support');
// });

Route::get('/user', function () {
    return view('pages.user');
});
Route::get('/transaction', function () {
    return view('pages.transaction');
});

Route::get('/sucess', function () {
    return view('pages.sucess');
});

Auth::routes();
