<?php

namespace App\Helpers;

use Response;
use Carbon\Carbon;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Config;

class Helper {
    
    public static function makeResponse($requestParams){
        $response = [
            'data' => (object)[]
        ];

        $a = [];
        if(!empty($requestParams['msg'])) {
            $a = explode(' - ', $requestParams['msg']);
            $response[MESSAGE] = !empty($a[0]) ? $a[0] : $requestParams['msg'];
        }
        
        if(!empty($requestParams[MESSAGE])){
            $response[MESSAGE] = $requestParams[MESSAGE];
        } else if(!empty($requestParams[ERRORS]) && $requestParams[ERRORS] instanceof MessageBag) {
            $response[MESSAGE] = $requestParams[ERRORS]->first();
        } else if(!empty($requestParams[ERRORS]) && !$requestParams[ERRORS] instanceof MessageBag){
            $response[MESSAGE] = array_values($requestParams[ERRORS])[0][0];
        }

        // Set Return Data
        if(array_key_exists("data",$requestParams)) {
            $response['data'] = $requestParams['data'];
        }

        // Set Token 
        if(!empty($requestParams[TOKEN])){
            $response[TOKEN] = $requestParams[TOKEN];
        }

        // Set All Errors
        if(!empty($requestParams[ERRORS])){
            $response[ERRORS] = $requestParams[ERRORS];
        }

        return Response::json($response, $requestParams['code']);
    }    
}
