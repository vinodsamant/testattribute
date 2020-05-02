<?php

namespace App\Http\Controllers\Api;

use App\Helpers\AuthHelper;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Api\ApiController;
use App\Models\User;
use App\Models\VerificationToken;
use App\Http\Requests\ProfileRequest;


class UserController extends ApiController
{
    /**
     * Update User Profile except email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function updateProfile(ProfileRequest $request)
    {
        try 
        {
            $user = AuthHelper::authenticatedUser();
            if (!$user) {
                return $this->sendError(config('constant.msgs.notFound'), config('constant.http_code.validaion_fail'));
            }
            User::where('id', $user->id)->update([
                'fname' => $request->fname,
                'lname' => $request->lname,
                'gender' => $request->gender,
                'age' => $request->age,
                'phone' => $request->phone,
            ]);
            $data = User::find($user->id);
            $requestToken = $request->header('Authorization');   
            $arrToken = explode(" ",$requestToken);
            $data->access_token = isset($arrToken[1])?trim($arrToken[1]):null;
            $response = $this->sendResponse(config('constant.msgs.profile_update_success'), config('constant.http_code.ok'),$data);
        } catch (\Exception $e) {
            $response = $this->sendError($e->getMessage(), config('constant.http_code.validaion_fail'));
        }
        return $response;
    }

    /**
     * Send Verification Code to new Email
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function sendCodeEmail(Request $request)
    {
        try {         
            $user = AuthHelper::authenticatedUser();            
            $data = AuthHelper::sendVerifyCode(strtolower($request->new_email), config('constant.email_verification_type.EMAIL_UPDATE'), $user->email_token);
            $response = $this->sendResponse(config('constant.msgs.sendCodeSuccess'), config('constant.http_code.ok'), $data);
        } catch (\Exception $e) {
            $response = $this->sendError($e->getMessage(), config('constant.http_code.validaion_fail'));
        }
        return $response;
    }

    /**
     * Resend Verification Code to new Email
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function resendCodeEmail(Request $request)
    {
        $email_user = AuthHelper::authenticatedUser(); 
        $data = AuthHelper::sendVerifyCode(strtolower($request->new_email), config('constant.email_verification_type.RESEND_CODE'), $email_user->email_token);
        VerificationToken::deleteOldCode($data);
        return $this->sendResponse(config('constant.msgs.sendCodeSuccess'), config('constant.http_code.ok'), $data);
    }



    /**
     * Verify Code on new Email
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function emailCodeVerify(Request $request)
    {
        try {            
            if (!VerificationToken::deleteToken($request->token, $request->code)) {
                return $this->sendError(config('constant.msgs.codeInvalid'), config('constant.http_code.validaion_fail'));
            }
            $data['new_email_token'] = AuthHelper::createToken(strtolower($request->new_email));
            User::where(EMAIL_TOKEN, $request->token)->update([
                'email' => strtolower($request->new_email),
                EMAIL_TOKEN =>  $data['new_email_token'],
            ]);
            $result = User::where('email', $request->new_email)->first();
            $requestToken = $request->header('Authorization');   
            $arrToken = explode(" ",$requestToken);            
            $result->access_token = isset($arrToken[1])?trim($arrToken[1]):null;
            return $this->sendResponse(config('constant.msgs.email_updated_success'), config('constant.http_code.ok'), $result);
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), config('constant.http_code.validaion_fail'));
        }
    }
}
