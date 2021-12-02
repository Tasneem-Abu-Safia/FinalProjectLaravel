<?php

namespace App\Http\Controllers\PublicController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\store;
use App\model\category;
use App\model\rating;

class publicCategoryController extends Controller
{

    public function index () {

        $categories  = category::withoutTrashed()->get();

        return view('welcome' , compact('categories'));
    }

    public function search(Request  $request){
        $search = $request['search'];
        //$search = $_GET['search'];

        $categories = category::withoutTrashed()->where('title','like','%'.$search.'%')->select('*')
            ->paginate(3);


        return view('welcome',compact('categories'));
    }

}
