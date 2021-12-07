<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use SoftDeletes;
 protected  $table ="categories";
public function stores(){
 return $this->hasMany('App\model\Store');
}
}
