<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{


    public function sendResponse(string $message, int $code, $result = null)
    {
        $response = [
            "data" => $result,
            "message" => $message,
        ];

        return response()->json($response, $code);
    }

    public function sendError(string $message, int $code)
    {
        $response = [
            "data" => (object) [],
            "message" => $message,
        ];

        return response()->json($response, $code);
    }
}
