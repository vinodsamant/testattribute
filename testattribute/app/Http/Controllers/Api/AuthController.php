<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\SetPasswordRequest;
use App\Models\User;
use Carbon\Carbon;
use App\Helpers\AuthHelper;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\VerifyCodeRequest;
use App\Http\Requests\ChangePasswordRequest;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Models\VerificationToken;
use Illuminate\Http\Response;

class AuthController extends ApiController
{
    /**
     * User Login
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        $credentials = [
            EMAIL => strtolower(request()->email), PASSWORD => request()->password,
            'status' => STATUS_ACTIVE, IS_VERIFIED => EMAIL_VERIFIED
        ];

        try {
            if (!$oauth_token = JWTAuth::attempt($credentials)) {
                return $this->sendError(config('constant.msgs.invalidUser'), Response::HTTP_UNPROCESSABLE_ENTITY);
            } else {                
                User::where(EMAIL,  strtolower(request()->email))->update([
                    'last_login' => Carbon::now(),
                    'is_logged_in' => config('constant.logIn_status_code.LOGGED_IN'),
                    'device_type' => request()->device_type,
                    'device_token' => request()->device_token,
                ]);
                $user = User::checkUser(EMAIL, strtolower(request()->email));
                $user->access_token = $oauth_token;
                return $this->sendResponse(config('constant.msgs.loggedIn'), Response::HTTP_OK, $user);
            }
        } catch (JWTException $e) {
            return $this->sendError($e->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }


    /**
     * User Logout
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $user = AuthHelper::authenticatedUser();
        if (!$user) {
            return $this->sendError(MSG_USER_NOT_FOUND, Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        User::where('id',  $user->id)->update([
            'is_logged_in' => config('constant.logIn_status_code.NOT_LOGGED_IN'),
        ]);       
        JWTAuth::invalidate(JWTAuth::parseToken());
        return $this->sendResponse(config('constant.msgs.loggedOut'), Response::HTTP_OK);
    }

    /**
     * Verify Verification Code
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function verifyCode(VerifyCodeRequest $request)
    {
        try
        {           
            if (!VerificationToken::deleteToken($request->token, $request->code)) {
                return $this->sendError(config('constant.msgs.codeInvalid'), Response::HTTP_UNPROCESSABLE_ENTITY);
            }
            $user = User::checkUser(EMAIL_TOKEN, $request->token);
            if ($user->is_verified == EMAIL_NON_VERIFIED) {
                User::where(EMAIL_TOKEN, $request->token)->update([
                    IS_VERIFIED => EMAIL_VERIFIED
                ]);
            }
            return $this->sendResponse(config('constant.msgs.codeVerified'), Response::HTTP_OK);
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    /**
     * Update Password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(SetPasswordRequest $request)
    {
        try {
            $user = User::checkUser(EMAIL_TOKEN, $request->token);
            if (!$user) {
                return $this->sendError(MSG_USER_NOT_FOUND, Response::HTTP_UNPROCESSABLE_ENTITY);
            }
            AuthHelper::passwordUpdate($request->token, $request->password);
            if($request->is_auth) {
                $credentials = [
                    EMAIL => $user->email,
                    'password'  => $request->password,
                    'status'    => STATUS_ACTIVE,
                    IS_VERIFIED => EMAIL_VERIFIED
                ];
                if (!$oauth_token = JWTAuth::attempt($credentials)) {
                    $response = $this->sendError(config('constant.msgs.invalidUser'), Response::HTTP_UNPROCESSABLE_ENTITY);
                }
                $user->access_token = $oauth_token;
            }
            $response = $this->sendResponse(config('constant.msgs.PwdUpdateSuccess'), Response::HTTP_OK, $user);
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return $response;
    }


    /**
     * Resend Verification Code
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function resendVerifyCode(Request $request)
    {
        if (!User::checkUser(EMAIL_TOKEN, $request->token)) {
            return $this->sendError(MSG_USER_NOT_FOUND, Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $data = AuthHelper::sendVerifyCode(AuthHelper::createEmail($request->token), config('constant.email_verification_type.RESEND_CODE'));
        VerificationToken::deleteOldCode($data);
        return $this->sendResponse(config('constant.msgs.sendCodeSuccess'), Response::HTTP_OK, $data);
    }

    /**
     * Change Password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePassword(ChangePasswordRequest $request)
    {
        try {
            $user = AuthHelper::authenticatedUser();
            if (!$user) {
                $response = $this->sendError(MSG_USER_NOT_FOUND, Response::HTTP_UNPROCESSABLE_ENTITY);
            }
            $data = $request->all();      
            if(!\Hash::check($data['current_password'], $user->password)){        
                $response = $this->sendError(config('constant.msgs.no_match_password'), Response::HTTP_UNPROCESSABLE_ENTITY);        
            } else {
                AuthHelper::changePassword($user->id, $request->new_password);            
                $response = $this->sendResponse(config('constant.msgs.PwdUpdateSuccess'), Response::HTTP_OK);
            }
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return $response;
    }
}
