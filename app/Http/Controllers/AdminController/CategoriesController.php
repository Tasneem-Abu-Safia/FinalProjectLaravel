<?php

namespace App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CategoriesCreateRequest;
class CategoriesController extends Controller
{
    public function create () {
        return view('layout.admin.categories.create');
    }

    public function store(CategoriesCreateRequest $request) {
        $category = new category;
        $category->title = $request['title'];
        $category->description= $request['description'];
        $is_foundTitle  = category::withoutTrashed()->where('title',$request['title'])->exists();
        $status = false;
        if (!$is_foundTitle){
        if ($request->hasFile('image')){
            $file = $request->file('image');

            $file_name = time() . rand(1, 100000000000000);
            $ext = $file->getClientOriginalExtension();
            $path = "uploads/categories/$file_name.$ext";

            Storage::disk('local')->put($path, file_get_contents($file));

            $category->src_photo = $path ;
        }
        $status = true;
         $category->save();
}


        return redirect()->back()->with('status',$status);
    }

    public function index () {



        $categories = category::all();



        return view('layout.admin.categories.index')->with('categories', $categories);
    }

    public function destroy($id) {


        $category = category::find($id);
        $result = $category->delete();
        return redirect()->back();
    }


    public function edit ($id) {
        $category = category::find($id);
        return view('layout.admin.categories.edit')->with('category', $category);
    }
    public function update (CategoriesCreateRequest $request, $id) {
        $category = category::find($id);
        $category->title = $request['title'];
        $category->description= $request['description'];
        $is_foundTitle  = category::withoutTrashed()->where('title',$request['title'])->where('id','!=',$id)->exists();
        $status = false;
        if (!$is_foundTitle){
            if ($request->hasFile('image')){
                $file = $request->file('image');


            $file_name = time() . rand(1, 100000000000000);
            $ext = $file->getClientOriginalExtension();
            $path = "uploads/categories/".$file_name.$ext;

            Storage::disk('local')->put($path, file_get_contents($file));

            $category->src_photo = $path ;
        }
            $status = true;

            $category->update();}

        return redirect()->back()->with('status',$status);
    }
}
