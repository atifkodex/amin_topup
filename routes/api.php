<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\ApiAuthController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Auth\Notifications\ResetPassword;
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
});

Route::middleware('auth:api')->group(function () {
    //    Route::get('/articles', 'ArticleController@index')->middleware('api.admin')->name('articles');
    Route::get('/articles', [ArticleController::class, 'index'])->middleware('api.admin')->name('articles');
    Route::post('/logout', [ApiAuthController::class, 'logout'])->name('logout.api');
    Route::post('/update', [ApiAuthController::class, 'update_user'])->name('update.api');
});


Route::post('password/email', [ResetPasswordController::class, 'sendResetResponse'])->name('password/email');
