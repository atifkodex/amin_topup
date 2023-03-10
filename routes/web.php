<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUIController;
use App\Http\Middleware\AdminAuth;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\WebsiteController;

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

Route::group(['middleware' => 'prevent-back-history'],function(){
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
            Route::get("/logout",[AdminUIController::class,"logout"])->name("adminLogout");
        });
    });
    
});
        Route::get('/admin', function () {
            return view('pages.auth.login');
        })->name('login');
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

// Route::get('/', function () {
//     return view('pages.sucess');
// });

Auth::routes();


// website
Route::post('/number_detail', [WebsiteController::class, 'numberDetail'])->name('number-detail');
Route::get('/amount_detail', [WebsiteController::class, 'amountDetail'])->name('amountDetails');
Route::post('/user_login', [WebsiteController::class, 'userLogin'])->name('userLogin');
Route::post('/inweb_login', [WebsiteController::class, 'inwebLogin'])->name('inwebLogin');
Route::post('/user_signup', [WebsiteController::class, 'userSignup'])->name('userSignup');
Route::post('/inweb_signup', [WebsiteController::class, 'inwebSignup'])->name('inwebSignup');
Route::post('/resetpassword', [WebsiteController::class, 'resetPassword'])->name('resetPassword');
Route::post('/order_summary', [WebsiteController::class, 'orderSummary'])->name('orderSummary');
Route::get('/logout_user', [WebsiteController::class, 'logoutUser'])->name('logoutUser');
Route::get('/topup_history', [WebsiteController::class, 'topupHistory'])->name('topupHistory');
Route::get('/topup_detail/{id}', [WebsiteController::class, 'topupDetail']);
Route::get('/profile', [WebsiteController::class, 'userProfile'])->name('userProfile');
Route::post('/edit_profile', [WebsiteController::class, 'editProfile'])->name('editProfile');
Route::post('/pay_topup', [WebsiteController::class, 'payTopup'])->name('payTopup');

Route::get('/', function () {
    return view('pages.website.home');
});

// Route::get('receiver-detail', function () {
//     return view('pages.website.recevier');
// });

// Route::get('amount-detail', function () {
//     return view('pages.website.amount');
// })->name('amountDetails');

Route::get('order', function () {
    return view('pages.website.order-summary');
});

Route::get('payment', function () {
    return view('pages.website.payment-info');
});

// Route::get('transaction', function () {
//     return view('pages.website.transaction');
// });

Route::get('contact', function () {
    return view('pages.website.contact-us');
});

// Route::get('profile', function () {
//     return view('pages.website.profile');
// });

// Route::get('report', function () {
//     return view('pages.website.report');
// });

Route::get('privacy', function () {
    return view('pages.website.privacy');
});

Route::get('terms', function () {
    return view('pages.website.terms');
});

// auth

Route::get('reg', function () {
    return view('pages.website.auth.registration');
});

Route::get('login', function () {
    return view('pages.website.auth.login');
});

Route::get('main_login', function () {
    return view('pages.website.auth.main-login');
});

Route::get('signup', function () {
    return view('pages.website.auth.sign-up');
});

Route::get('main_signup', function () {
    return view('pages.website.auth.main-signup');
});

Route::get('forgot', function () {
    return view('pages.website.auth.forgot-password');
});
Route::get('reset_password', function () {
    return view('pages.website.auth.reset-password');
});