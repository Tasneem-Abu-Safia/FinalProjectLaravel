<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class store extends Model
{
    use SoftDeletes;
  public function categorie(){
      return $this->belongsTo('App\model\category');
  }

    public function rating(){
        return $this->hasMany('App\model\rating');
    }
}
