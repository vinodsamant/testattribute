<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VerificationToken extends Model
{
    public static function deleteToken($token, $code)
    {
        return self::where('token', $token)->where('code', $code)->delete();
    }
    
    public static function deleteOldCode($data)
    {
        return self::where('token', '=', $data['email_token'])->where('code', '!=', $data['verify_code'])->delete();
    }
}
