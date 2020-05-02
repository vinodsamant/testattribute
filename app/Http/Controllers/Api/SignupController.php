<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Api\ApiController;
use App\Models\User;
use App\Http\Requests\SignupRequest;
use App\Http\Traits\UuidTrait;
use App\Helpers\AuthHelper;

class SignupController extends ApiController
{
    use UuidTrait;
    private $uuid;

    public function __construct(Request $request)
    {
        /*Get UUID*/
        $this->uuid = $this->generate_uuid();
    }

    /**
     * User Signup.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function register(SignupRequest $request)
    {
        try {
            DB::beginTransaction();

            $inputs = $request->all();

            if ($inputs['age'] < config('constant.age_validation.MIN_AGE') || $inputs['age'] > config('constant.age_validation.MAX_AGE')) {
                return $this->sendError(config('constant.msgs.age_rule'), config('constant.http_code.validaion_fail'));
            }

            $inputs[EMAIL] = strtolower($inputs[EMAIL]);
            $inputs[EMAIL_TOKEN] = AuthHelper::createToken($inputs[EMAIL]);
            $inputs['uuid'] = $this->uuid;
            $inputs['role'] = config('constant.role_type.Customer');

            User::addRecord($inputs);

            $data = AuthHelper::sendVerifyCode($inputs[EMAIL], config('constant.email_verification_type.SIGNUP'));

            DB::commit();

            $response = $this->sendResponse(config('constant.msgs.signup_success'), config('constant.http_code.ok'), $data);
        
        } catch (\Exception $e) {
            DB::rollback();
            $response = $this->sendError($e->getMessage(), config('constant.http_code.validaion_fail'));
        }
        return $response;
    }
}
