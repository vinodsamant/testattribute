<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Validator;
use App\Helpers\AuthHelper;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Response;

class QuestionController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=null)
    {
        try {
            $user = AuthHelper::authenticatedUser();
            $conditions[] = ['status', '<>', config('constant.status_code.BLOCKED')];
            if(!empty($id)) {
                $conditions[] = ['id', $id];               
            }
            $question = Question::with('category')
                ->where($conditions);

            $question_count =  $question->count();
            if ($question_count === ZERO) {
                $response = $this->sendResponse(config('constant.msgs.no_questions'), Response::HTTP_OK);
            } else {
                if($user->role == config('constant.role_type.Customer')) {
                    $questions = $question->inRandomOrder()->limit(QUESTION_LIMIT)->get();
                    $question_count = $questions->count();
                    $response = $this->sendResponse($question_count ." random questions", Response::HTTP_OK, $questions);
                } else {
                    $questions = $question->paginate(PAGE_LIMIT);
                    $response = $this->sendResponse($question_count . " questions found", Response::HTTP_OK, $questions);
                }        
            }
        } catch (\Exception $e) {
            $response = $this->sendError($e->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return $response;
    }
}
