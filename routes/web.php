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
    Route::group(['prefix' => 'admin', 'middleware' => [IsAdmin::class]], function () {

        Route::post('/support', [AdminUIController::class, 'support'])->name('/support');
        Route::get('/dashboard', [AdminUIController::class, 'dashboardDetails'])->name('dashboard-details');
        Route::get('/setting', [AdminUIController::class, 'settingDetails'])->name('setting-details');
        Route::get('/support_page', [AdminUIController::class, 'support'])->name('support-page');
        Route::post('/admin_reply', [AdminUIController::class, 'reply'])->name('admin.reply');
        // Route::post('/user_list', [AdminUIController::class, 'user_list'])->name('admin.user_list');
        Route::get('/transactions', [AdminUIController::class, 'transactionList'])->name('transactionList');
        // Route::post('/transaction_list', [AdminUIController::class, 'transactionsList'])->name('transactionsList');
        Route::get('/user', [AdminUIController::class, 'user_list'])->name('user');
        Route::post('/user_filter', [AdminUIController::class, 'users_filter'])->name('filterData');
        Route::get('/admin_ist', [AdminUIController::class, 'admin_list'])->name('adminList');
        Route::post('/resolve_contact', [AdminUIController::class, 'resolve'])->name('resolve_contact');
        Route::post('/admin_create', [AdminUIController::class, 'create_and_update_admin'])->name('admin_create');
        Route::post('/change-password', [AdminUIController::class, 'changePassword'])->name('changePassword');
        Route::get('/change_password', [AdminUIController::class, 'changePasswordPage'])->name('changePasswordPage');
        Route::post('/update_env', [AdminUIController::class, 'updateEnv'])->name('update_env');
        Route::post('/download', [AdminUIController::class, 'downloadPdf'])->name('downloaduserpdf');
    });
});

Route::get('/admin', function () {
    return view('pages.auth.login');
});
Route::get('/admin/login', function () {
    return view('pages.auth.login');
});

// Route::get('/change_password', function () {
//     return view('pages.auth.change-password');
// });

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

// Route::get('/user', function () {
//     return view('pages.user');
// });
// Route::get('/transaction', function () {
//     return view('pages.transaction');
// });

Route::get('/sucess', function () {
    return view('pages.sucess');
});

Auth::routes();
