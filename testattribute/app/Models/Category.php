<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'status'
    ];
    
    public function questions()
    {
        return $this->hasMany('App\Models\Question','category_id','id');
    }
}
