<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Response;
use App\Models\Content;

class ContentController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {            
            $contents = Content::all();            
            $response = $this->sendResponse(config('constant.msgs.ok'), Response::HTTP_OK, $contents);            
        } catch (\Exception $e) {
            $response = $this->sendError($e->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return $response;
    }    
}
