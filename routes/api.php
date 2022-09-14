<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\ApiAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['cors', 'json.response', 'auth:api'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['cors', 'json.response']], function () {
    // public routes
    // Route::post('/login', 'Auth\ApiAuthController@login')->name('login.api');
    Route::post('/login', [ApiAuthController::class, 'login'])->name('login.api');
    Route::post('/register', [ApiAuthController::class, 'register'])->name('register.api');
    Route::post('/logout', [ApiAuthController::class, 'logout'])->name('logout.api');
});

Route::middleware('auth:api')->group(function () {
    Route::post('/dashboard', [AdminController::class, 'adminDashboard']);
    Route::get('/users_list', [UserController::class, 'allUsers']);
    Route::post('/check_operator', [UserController::class, 'networkOperator']);
    Route::post('/add_operator_data', [OperatorController::class, 'operatorData']);
    Route::post('/support', [ContactsController::class, 'user_support'])->name('support.api');
    Route::post('/create_admin', [AdminController::class, 'create_admin'])->name('create_admin.api');
    Route::post('/users', [AdminController::class, 'usersList'])->name('users.api');
    Route::post('/settings', [SettingController::class, 'settingsData']);
    Route::post('/reply_send', [AdminController::class, 'replySend'])->name('reply_send.api');
    Route::post('/resolve', [AdminController::class, 'resolve'])->name('resolve.api');
    Route::post('/update_operator', [SettingController::class, 'updateOperator']);
    Route::post('/transactions', [AdminController::class, 'TransactionList']);
    Route::post('/admin_notifications', [AdminController::class, 'adminNotifications']);

    Route::get('/articles', [ArticleController::class, 'index'])->middleware('api.admin')->name('articles');
    Route::post('/logout', [ApiAuthController::class, 'logout'])->name('logout.api');
    Route::post('payment_url', [OrderController::class, 'stripePaymentUrl']);
    Route::post('payment_intent', [OrderController::class, 'paymentIntent']);
    Route::post('topup', [OrderController::class, 'Topup']);
    Route::post('/update', [ApiAuthController::class, 'update_user'])->name('update.api');
    Route::post('/contact_us', [ContactsController::class, 'contacts'])->name('contact_us.api');
    Route::post('/create_transaction', [OrderController::class, 'createTransaction']);
    Route::post('/transaction_status', [OrderController::class, 'transactionStatus']);
    Route::post('/topup_history', [OrderController::class, 'topupHistory']);
    Route::post('/all_topups', [OrderController::class, 'allTopups']);
    Route::post('/transaction_detail', [OrderController::class, 'transactionDetail']);
    Route::post('/reset_password', [OtpController::class, 'resetPassword']);
    Route::post('/notification_list', [SettingController::class, 'notificationList']);
    Route::post('/image_link', [SettingController::class, 'createImageLink']);
    Route::post('/user_profile', [UserController::class, 'userProfile']);
    Route::post('/change_password', [UserController::class, 'changePassword']);
});
