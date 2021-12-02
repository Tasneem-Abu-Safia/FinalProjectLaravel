<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class category extends Model
{
    use SoftDeletes;

public function stores(){
 return $this->hasMany('App\model\store');
}
}
