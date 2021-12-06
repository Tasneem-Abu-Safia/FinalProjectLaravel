<?php

namespace App\Http\Controllers\PublicController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Store;
use App\model\Category;
use App\model\Rating;

class PublicStoreController extends Controller
{

    public function index ($id) {

        $stores  = Store::withoutTrashed()->where('categories_id',$id)->paginate(3);
        $rating  = Rating::withoutTrashed()->get();
        session()->put('categoryID',$id);
        return view('layout.publicSite.StoreToClient' , compact('stores'))->with('allrating',$rating);
    }

    public function store(Request $request , $id) {

        $rating = new Rating();
        $rating->rate = $request['rating'];
        $rating->ipAddress = exec('getmac');
        //$rating->ipAddress = $request()->ip();
        $rating->stores_id = $id;
        $state ="";
        $is_IPrating  = Rating::withoutTrashed()->where('ipAddress',exec('getmac'))->where('stores_id',$id)->exists();
        if (!$is_IPrating){
            if ($request['rating'] != null && $request['rating'] !=null){
            $rate =$request['rating'];
            $this->getAvg($id,$rate);
            $rating->save();
            $state = true ;
            }

        }
        else{
            $state = false;
        }





       return redirect()->back()->with('status',$state);
    }

    private function getAvg($id , $rate)
    {
/*
   1) $ratingSum = rating::withoutTrashed()->where('stores_id',$id)->sum('rate');
       $ratingCount = rating::withoutTrashed()->where('stores_id',$id)->count();
         $avg = $ratingSum/$ratingCount;
   2) $new_avg = $old_avg +(($rate-$old_avg)/$new_num);
   3) $avg = rating::withoutTrashed()->where('stores_id' ,$id)->avg('rate');

 */
        $store =Store::find($id);
        $old_num = $store->numRating;
        $old_avg = $store->avgRating;
        $new_num = $old_num + 1 ;
        $new_avg = (($old_avg * $old_num)+$rate)/($new_num);
        $store->numRating = $new_num;
        $store->avgRating = $new_avg;
        $store->save();
    }

    public function search($id){
        $search = $_GET['search'];
        $stores = Store::withoutTrashed()->where('name','like','%'.$search.'%')->where('categories_id',$id)
            ->paginate(3);


        return view('layout.publicSite.StoreToClient',compact('stores'));
    }


    public function detail($id) {

        $store  = Store::withoutTrashed()->where('id',$id)->first();
        session()->put('categoryID',$id);
        return view('layout.publicSite.storeDetail' , compact('store'));
    }
}
