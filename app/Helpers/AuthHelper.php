<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Models\User;
use Hash;
use App\Models\VerificationToken;
use App\Jobs\SendVerificationEmail;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerification;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;


class AuthHelper
{
    public static function createToken($email)
    {
        return base64_encode($email);
    }

    public static function createEmail($token)
    {
        return base64_decode($token);
    }

    public static function dateConvert($date, $format)
    {
        return date_format(date_create($date), $format);
    }

    public static function sendVerifyCode($email = null, $type = null, $token = null)
    {

        $data['type'] = $type;

        if (empty($token)) {
            $data[EMAIL_TOKEN] = self::createToken($email);
        } else {
            $data[EMAIL_TOKEN] = $token;
        }
        $data['verify_code'] = rand(100000, 999999);

        VerificationToken::insert(
            [
                'token' => $data[EMAIL_TOKEN],
                'code' => $data['verify_code'],
            ]
        );

        Mail::to($email)->send(new EmailVerification($data));

        return $data;
    }

    public static function passwordUpdate($token, $password)
    {
        User::where(EMAIL_TOKEN, trim($token))->update([
            'password' => Hash::make($password),
        ]);
    }

    public static function changePassword($id, $password)
    {
        User::where('id', $id)->update([
            'password' => Hash::make($password),
        ]);
    }

    public static function authenticatedUser()
    {   
        $returnNull = null;
        try {
            if (!JWTAuth::parseToken()->authenticate()) {
                $returnNull;
            } else {
                return JWTAuth::parseToken()->authenticate();
            }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            $returnNull;
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            $returnNull;
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
            $returnNull;
        }
        return $returnNull;
    }
}
