<?php
namespace App\Http\Traits;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Helpers\Helper;

trait RestTrait{
    /**
     * Determines if request is an api call.
     *
     * If the request URI contains '/api/v1/'.
     *
     * @param Request $request
     * @return bool
     */
    protected function isApiCall(Request $request){
        return strpos($request->getUri(), '/api') !== false;
    }

    /**
     * Exception handle for bad request
     * 
     * @param Object $request
     * @param Exception $e
     * 
     * @return Json
     */
    protected function getJsonResponseForException($e){
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException){
            return Helper::makeResponse([
                KEY_CODE => Response::HTTP_NOT_FOUND,
                KEY_STATUS => Response::$statusTexts[Response::HTTP_NOT_FOUND],
                KEY_MSG => 'Endpoint not found'
            ]);
        } else if($e instanceof \Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException){
            return Helper::makeResponse([
                KEY_CODE => Response::HTTP_METHOD_NOT_ALLOWED,
                KEY_STATUS => Response::$statusTexts[Response::HTTP_METHOD_NOT_ALLOWED],
                KEY_MSG => Response::$statusTexts[Response::HTTP_METHOD_NOT_ALLOWED]
            ]);
        }
        return Helper::makeResponse([
            KEY_CODE => Response::HTTP_BAD_REQUEST,
            KEY_STATUS => Response::$statusTexts[Response::HTTP_BAD_REQUEST],
            KEY_MSG => $e->getMessage().' - '.basename($e->getFile()).' - '.$e->getLine()
        ]);
    }
}