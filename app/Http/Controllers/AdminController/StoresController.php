<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\store;
use App\model\category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoresCreateRequest;
use App\Charts\RatingChart;

class StoresController extends Controller
{
    public function create () {
        $categories = category::all();
        return view('layout.admin.stores.create')->with("categories",$categories);
    }

    public function store(StoresCreateRequest $request) {
        $store = new store;
        $store->name = $request['name'];
        $store->address = $request['address'];
        $store->phone= $request['phone'];
        $store->categories_id= $request['category_id'];

        $is_foundName  = store::withoutTrashed()->where('name',$request['name'])->exists();
        $status = false;
        if (!$is_foundName){
            if ($request->hasFile('image')){

            $file = $request->file('image');

            $file_name = time() . rand(1, 100000000000000);
            $ext = $file->getClientOriginalExtension();
            $path = "uploads/stores/$file_name.$ext";

            Storage::disk('local')->put($path, file_get_contents($file));

            $store->src_logo = $path;}

        $status = true;
        $store->save();}

        return redirect()->back()->with('status',$status);
    }

    public function index () {



        $stores = store::withoutTrashed()->Join('categories', function($join) {
            $join->on('stores.categories_id', '=', 'categories.id');
            $join->wherenull('categories.deleted_at');
            })

            ->select('*','stores.id as S_id')->paginate(2);



        return view('layout.admin.stores.index' , compact('stores'));
    }
    public function indexDeleted () {




            $stores = store::onlyTrashed()->Join('categories', function($join) {
                $join->on('stores.categories_id', '=', 'categories.id');
                $join->wherenull('categories.deleted_at');
            })
                ->select('*','stores.id as S_id')->paginate(2);



        return view('layout.admin.stores.deletedStore' , compact('stores'));
    }

    public function destroy($id) {


        $store = store::find($id);
        $store->delete();
        return redirect()->back()->with('success' ,'Store Deleted Successfully');
    }


    public function edit ($id) {
        $store = store::where('id',$id)->first();
        $categories = category::all();
        return view('layout.admin.stores.edit')->with('store', $store)->with("categories",$categories);
    }

    public function update (StoresCreateRequest $request, $id) {
        $store = store::find($id);
        $store->name = $request['name'];
        $store->address = $request['address'];
        $store->phone= $request['phone'];
        $is_foundName  = store::withoutTrashed()->where('name',$request['name'])->where('id','!=',$id)->exists();
        $status = false;
        if (!$is_foundName){
            if ($request->hasFile('image')){

            $file = $request->file('image');

            $file_name = time() . rand(1, 100000000000000);
            $ext = $file->getClientOriginalExtension();
            $path = "uploads/stores/$file_name.$ext";

            Storage::disk('local')->put($path, file_get_contents($file));

            $store->src_logo = $path;
        }
         $status = true;
        $store->update();}

        return redirect()->back()->with('status' ,$status);
    }

    public function search(){
        $search = $_GET['search'];
        $stores = store::Join('categories', function($join) {
            $join->on('stores.categories_id', '=', 'categories.id');
            $join->wherenull('categories.deleted_at');
        })->where('name','like','%'.$search.'%')
            ->select('*','stores.id as S_id')->paginate(2);





        return view('layout.admin.stores.index')->with('stores', $stores);
    }



    public function restore ($id) {
        $result = Store::withTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('status','Restore Successfully');
    }

    public function searchDeleted(Request  $request){
        $search = $request['search'];
        $stores = store::onlyTrashed()->Join('categories', function($join) {
            $join->on('stores.categories_id', '=', 'categories.id');
            $join->wherenull('categories.deleted_at');
        })->where('name','like','%'.$search.'%')
            ->select('*','stores.id as S_id')->paginate(2);



        return view('layout.admin.stores.deletedStore')->with('stores', $stores);
    }
    public function searchreview(Request  $request){
        $search = $request['search'];
        $stores = store::withoutTrashed()->where('name','like','%'.$search.'%')
            ->select('*')->paginate(3);



        return view('layout.admin.reviews.storereview')->with('stores', $stores);
    }

    public function indexreview () {
        $stores  = Store::withoutTrashed()->paginate(2);

        return view('layout.admin.reviews.storereview' , compact('stores'));
    }
}