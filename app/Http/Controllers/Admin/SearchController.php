<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Product $product){
        if($product->search){
            $searchProduct=Product::where('name','LIKE','%'.$product->search)->latest()->paginate(15);

            return view('frontend.search',compact('searchProduct'));

        }else{
            return redirect()->back()->with('message','empty');
        }
    }

}
