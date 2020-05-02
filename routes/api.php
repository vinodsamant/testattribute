<?php

use Illuminate\Http\Request;

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



Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function () {

    Route::get('/', function () {
        response()->json(
            [
                'status' => 1,
                'query_string' => 'debug=0;database=beacons',
                'remote_host' => '127.0.0.1',
                'status' => 'ERROR',
                'statusText' => 'unimplemented'
            ],
            200
        );
    });
    Route::post('register', 'SignupController@register');
    Route::post('login', 'AuthController@login');
    Route::post('verify_code', 'AuthController@verifyCode');
    Route::post('forgot_password', 'ForgotPasswordController@sendResetCodeEmail');
    Route::post('resend_code', 'AuthController@resendVerifyCode');
    Route::post('update_password', 'AuthController@updatePassword');
    Route::post('refresh_token', 'AuthController@refreshToken');
    Route::get('content', 'ContentController@index');
    Route::group(['middleware' => ['jwt.verify']], function() {
        Route::post('logout', 'AuthController@logout');
        Route::get('dashboard', 'DashboardController@index');
        Route::post('update_profile', 'UserController@updateProfile');
        Route::post('send_code_email', 'UserController@sendCodeEmail');
        Route::post('email_code_verify', 'UserController@emailCodeVerify');
        Route::post('resend_code_email', 'UserController@resendCodeEmail');
        Route::post('send_invite', 'GameController@sendInvite');
        Route::get('receive_invite', 'GameController@receiveInvite');
        Route::get('sent_invite', 'GameController@sentInvite');
        Route::post('update_invite', 'GameController@updateInviteStatus');
        Route::post('change_password', 'AuthController@changePassword');        
        Route::get('category/{id?}', 'CategoryController@index');
        Route::get('question/{id?}/{category_id?}', 'QuestionController@index');
    });

});
