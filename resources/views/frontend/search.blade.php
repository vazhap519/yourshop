@extends('layouts.frontend')
@section('content')
    <ul class="product_boxes_area_Right_Content searchprod">

            <li>
                <a href="">
{{--                    <img src="{{asset('assets/images/product_images/'.$item->image)}}"  alt="">--}}
                    <h3 class="product_boxes_area_Right_Content_product_title"></h3>
                    <section class="product_box_area_Right_Content_meta">
                        <div class="product_box_area_right_Content_desc">
               <span  class="product_box_area_right_Content_desc_add_To_Cart" >
                   <i class="fa-solid fa-cart-shopping"></i>
            </span>
                            <span class="product_box_area_right_Content_desc_Price">₾</span>
                            <span class="product_box_area_right_Content_desc_add_To_Fav" ><i class="fa-solid fa-heart"></i></span>
                        </div>
                    </section>
                </a>
            </li>

    </ul>

@endsection
