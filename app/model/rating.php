<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    protected $table="rating";
    use SoftDeletes;

    public function store(){
        return $this->belongsTo('App\model\Store');
    }
}
