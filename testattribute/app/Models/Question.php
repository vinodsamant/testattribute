<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id', 'title', 'status'
    ];
    
    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id','id');
    }
}
