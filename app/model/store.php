<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;
    protected  $table ="stores";

    public function category(){
      return $this->belongsTo('App\model\Category');
  }

    public function rating(){
        return $this->hasMany('App\model\Rating');
    }
}
