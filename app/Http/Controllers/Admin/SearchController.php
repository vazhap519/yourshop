<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request){
$output='';
        if ($request->ajax()){
            $SearchProducts=Product::where('name','like','%'.$request->search.'%')
                ->orWhere('description','like','%'.$request->search.'%')
                ->orWhere('status','like','%'.$request->search.'%')
                ->orWhere('condition','like','%'.$request->search.'%')
                ->orWhere('quantity','like','%'.$request->search.'%')
                ->orWhere('colors','like','%'.$request->search.'%')
                ->orWhere('meta_title','like','%'.$request->search.'%')
                ->orWhere('meta_keyboards','like','%'.$request->search.'%')
                ->orWhere('meta_description','like','%'.$request->search.'%')
                ->orWhere('price','like','%'.$request->search.'%')
                ->orWhere('sale_price','like','%'.$request->search.'%')
                ->get();
            foreach ($SearchProducts as $search){
                $output.='
                <ul class="product_boxes_area_Right_Content">
            <li>
                <a href="">
                       <img src="'.$search->image.'"  alt="">
                    <h3 class="product_boxes_area_Right_Content_product_title">.$search->name.</h3>
                    <section class="product_box_area_Right_Content_meta">
                        <div class="product_box_area_right_Content_desc">
               <span  class="product_box_area_right_Content_desc_add_To_Cart" >
                   <i class="fa-solid fa-cart-shopping"></i>
            </span>
                            <span class="product_box_area_right_Content_desc_Price">$search->price.₾</span>
                            <span class="product_box_area_right_Content_desc_add_To_Fav" ><i class="fa-solid fa-heart"></i></span>
                        </div>
                    </section>
                </a>
            </li>

    </ul>
                ';

            }
            return response()->json($output);
        }
        return view('frontend.search');
    }


}
