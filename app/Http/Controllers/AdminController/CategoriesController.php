<?php

namespace App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CategoriesCreateRequest;
class CategoriesController extends Controller
{
    public function create () {
        return view('layout.admin.categories.create');
    }

    public function store(CategoriesCreateRequest $request) {
        $category = new Category;
        $category->title = $request['title'];
        $category->description= $request['description'];
        $is_foundTitle  = Category::withoutTrashed()->where('title',$request['title'])->exists();
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

    public function index (Request $request) {
        $search = $request['search'] ?? "";
        if ($search != ""){
            $categories = Category::withoutTrashed()->where('title','LIKE',"%$search%")->get();
        }
        else{
            $categories = Category::all();
        }

        $data = compact('categories' , 'search');

        return view('layout.admin.categories.index')->with($data);
    }

    public function destroy($id) {


        $category = Category::find($id);
        $result = $category->delete();
        return redirect()->back();
    }


    public function edit ($id) {
        $category = Category::find($id);
        return view('layout.admin.categories.edit')->with('Category', $category);
    }
    public function update (CategoriesCreateRequest $request, $id) {
        $category = Category::find($id);
        $category->title = $request['title'];
        $category->description= $request['description'];
        $is_foundTitle  = Category::withoutTrashed()->where('title',$request['title'])->where('id','!=',$id)->exists();
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
