<?php

namespace App\Http\Controllers\PublicController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Store;
use App\model\Category;
use App\model\Rating;

class publicCategoryController extends Controller
{

    public function index () {

        $categories  = Category::withoutTrashed()->get();

        return view('welcome' , compact('categories'));
    }

    public function search(Request  $request){
        $search = $request['search'];
        //$search = $_GET['search'];

        $categories = Category::withoutTrashed()->where('title','like','%'.$search.'%')->select('*')
            ->paginate(3);


        return view('welcome',compact('categories'));
    }

}
