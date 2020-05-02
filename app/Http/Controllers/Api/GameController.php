<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Api\ApiController;
use App\Models\GameInvite;
use App\Helpers\AuthHelper;
use App\Models\User;
use Carbon\Carbon;
use App\Http\Requests\SendInviteRequest;
use App\Http\Requests\UpdateInviteRequest;
use App\Jobs\SendInvitationEmail;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailInvitation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;

class GameController extends ApiController
{
    
    public function __construct()
    {
        if (!AuthHelper::authenticatedUser()) {
            return $this->sendError(MSG_USER_NOT_FOUND, Response::HTTP_UNPROCESSABLE_ENTITY);
        } else {
            $this->user = AuthHelper::authenticatedUser();
        }
    }

    /**
     * Send Invite.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function sendInvite(SendInviteRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $saveData = [
                SENDER_UUID => $this->user->uuid,
                RECEIVER_EMAIL => $data[RECEIVER_EMAIL],
                RECEIVE_EMAIL_TOKEN => AuthHelper::createToken($data[RECEIVER_EMAIL]),
                LOCATION => $data[LOCATION],
                LATITUDE => $data[LATITUDE],
                LONGITUDE => $data[LONGITUDE],
                DATETIME =>  AuthHelper::dateConvert($data[DATETIME], "Y-m-d H:i:s")
            ];
            GameInvite::insert($saveData);
            Mail::to($saveData[RECEIVER_EMAIL])->send(new EmailInvitation($this->user, $saveData));
            DB::commit();
            $response = $this->sendResponse(config('constant.msgs.invite_sent_success'), Response::HTTP_OK);
        } catch (\Exception $e) {
            DB::rollback();
            $response = $this->sendError($e->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return $response;
    }


    /**
     * Receive Invite.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function receiveInvite(Request $request)
    {
        try {
            $recCond = [RECEIVE_EMAIL_TOKEN, base64_encode($this->user->email)];
            $receiveInvite = GameInvite::invite($recCond);
            if ($receiveInvite->count() >= ZERO) {          
                $receiveInvites = $receiveInvite->get();
                $response = $this->sendResponse($receiveInvite->count() . " invite(s) found", Response::HTTP_OK, $receiveInvites);
            }
        } catch (\Exception $e) {
            $response = $this->sendError($e->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return $response;
    }

    /**
     * Sent Invite.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sentInvite(Request $request)
    {
        try {
            $sentCond = [SENDER_UUID, $this->user->uuid];
            $sentInvite = GameInvite::invite($sentCond,ONE);            
            if ($sentInvite->count() >= ZERO) {
                $sentInvitations = $sentInvite->get();
                $response = $this->sendResponse($sentInvite->count() . " sent invite(s) found", Response::HTTP_OK, $sentInvitations);
            }
        } catch (\Exception $e) {
            $response = $this->sendError($e->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return $response;
    }

    /**
     * Update Invite status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateInviteStatus(UpdateInviteRequest $request)
    {
        try {
            GameInvite::where('id', $request->invite_id)->update([
                'status' => $request->status,
            ]);
            $response = $this->sendResponse(config('constant.msgs.invite_status_updated'), Response::HTTP_OK);
        } catch (\Exception $e) {
            $response = $this->sendError($e->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return $response;
    }
}
