<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class GameInvite extends Model
{   
    public function sender()
    {
        return $this->belongsTo('App\Models\User', 'sender_uuid', 'uuid');
    }

    public function receiver()
    {
        return $this->belongsTo('App\Models\User', 'receiver_email', 'email');
    }

    public static function invite($cond,$isSender=null)
    {   
        $conditions[] = [DATETIME, '>=', Carbon::now()];
        if(!empty($cond))
        {
            $conditions[] = $cond;
        }
        $user = SENDER;
        if(!empty($isSender)) {
            $user = RECEIVER;
        }
        return self::with($user)->where($conditions)->orderBy(DATETIME,'ASC');  
    }
}
