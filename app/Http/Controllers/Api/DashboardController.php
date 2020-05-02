<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Validator;
use App\Models\GameInvite;
use Carbon\Carbon;
use App\Models\User;
use App\Helpers\AuthHelper;

class DashboardController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $user = AuthHelper::authenticatedUser();
            $gameInviteCount = GameInvite::where('datetime', '>=', Carbon::now())
                ->orWhere('sender_uuid', $user->uuid)
                ->orWhere('receiver_email', $user->email)
                ->count();
            $dashboard = [
                'notification' => 0,
                'start_games'  => 0,
                'my_requests'  => $gameInviteCount ?? 0
            ];
            $response = $this->sendResponse(config('constant.msgs.ok'), config('constant.http_code.ok'), $dashboard);            
        } catch (\Exception $e) {
            $response = $this->sendError($e->getMessage(), config('constant.http_code.validaion_fail'));
        }
        return $response;
    }

}
