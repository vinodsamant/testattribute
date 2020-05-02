<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\ForgotPasswordRequest;
use App\Helpers\AuthHelper;


class ForgotPasswordController extends ApiController
{
    /**
     * Forgot password .
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendResetCodeEmail(ForgotPasswordRequest $request)
    {
        $data = AuthHelper::sendVerifyCode(strtolower($request->email), config('constant.email_verification_type.FORGOT_PASSWORD'));

        return $this->sendResponse(config('constant.msgs.sendCodeSuccess'), config('constant.http_code.ok'),  $data);
    }
}
