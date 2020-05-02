<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use Carbon\Carbon;

class CategoryController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=null)
    {
        try {
            $conditions[] = ['status', '<>', config('constant.status_code.BLOCKED')];
            if(!empty($id)) {
                $conditions[] = ['id', $id];    
            }
            $category = Category::with('questions')
            ->where($conditions)
            ->select([
                'id',
                'title',
                'description',
                'status',
                'created_at',
                'updated_at',        
                ])
            ->orderBy('id','ASC');

            $category_count =  $category->count();
            if ($category_count === ZERO) {
                $response = $this->sendResponse(config('constant.msgs.no_categories'), config('constant.http_code.ok'));
            } else {
                $categories = $category->paginate(PAGE_LIMIT);
                $response = $this->sendResponse($category_count . " categories found", config('constant.http_code.ok'), $categories);
            }
        } catch (\Exception $e) {
            $response = $this->sendError($e->getMessage(), config('constant.http_code.validaion_fail'));
        }
        return $response;
    }
}
