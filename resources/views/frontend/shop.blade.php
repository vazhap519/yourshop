@extends('layouts.frontend');
@section('content')
    <div class="content market_content">


        <div class="product_boxes_area">
            <div class="product_boxes_area_left">
                <div class="price_filter">
                    <h2 class="price_filter_headder">ფასი</h2>
                    <div class="price_filter_box">
                        <div class="price_filter_box_prices">
                            <input type="text" class="price_filter_box_prices_min price_filter_box_prices_active" value="500">
                            <input type="text" class="price_filter_box_prices_max price_filter_box_prices_active" value="1100">
                        </div>
                        <input type="range" name="price_range" class="price_range">
                    </div>
                </div>
                <!----------------------------------------------------------------------------------->
                <div class="brands_filter">
                    <h2 class="brands_filter_header">ბრენდები</h2>
                    <ul class="band_list">
                        <li><label for="nvidia">nvidia</label>
                            <input type="checkbox" name="nvidia" id="nvidia"></li>
                        <li><label for="amd">amd</label>
                            <input type="checkbox" name="amd" id="amd"></li>
                    </ul>
                </div>
                <!------------------------------------------------------------------------------------>
                <div class="Models_filter">
                    <h2 class="Models_filter_header">მოდელი</h2>
                    <ul class="Models_filter_sub">
                        <li><label> RTX 3080</label><input type="checkbox"></li>
                        <li><label>RX 6600</label><input type="checkbox"></li>
                    </ul>
                </div>
            </div>


            <div class="product_boxes_area_Right">
                <ul class="product_boxes_area_Right_Content">
                    @foreach($products as $item)
                        <li>
                            <a href="{{route('single_product'.$item->id)}}">
                                <img src="{{asset('assets/images/product_images/'.$item->image)}}"  alt="">
                                <h3 class="product_boxes_area_Right_Content_product_title">{{$item->name}}</h3>
                                <section class="product_box_area_Right_Content_meta">
                                    <div class="product_box_area_right_Content_desc">
               <span  class="product_box_area_right_Content_desc_add_To_Cart" >
                   <i class="fa-solid fa-cart-shopping"></i>
            </span>
                                        <span class="product_box_area_right_Content_desc_Price">{{$item->price}}₾</span>
                                        <span class="product_box_area_right_Content_desc_add_To_Fav" ><i class="fa-solid fa-heart"></i></span>
                                    </div>
                                </section>
                            </a>
                        </li>
                            </a>

                    @endforeach
                </ul>
            </div>





            <div class="product_boxes_area_left  product_boxes_area_category">
                <div class="price_filter">
                    <h2 class="price_filter_headder">ფასი</h2>
                    <div class="price_filter_box">
                        <div class="price_filter_box_prices">
                            <input type="text" class="price_filter_box_prices_min price_filter_box_prices_active" value="500">
                            <input type="text" class="price_filter_box_prices_max price_filter_box_prices_active" value="1100">
                        </div>
                        <input type="range" name="price_range" class="price_range">
                    </div>
                </div>
                <!----------------------------------------------------------------------------------->
                <div class="brands_filter">
                    <h2 class="brands_filter_header">ბრენდები</h2>
                    <ul class="band_list">
                        <li><label for="nvidia">nvidia</label>
                            <input type="checkbox" name="nvidia" id="nvidia"></li>
                        <li><label for="amd">amd</label>
                            <input type="checkbox" name="amd" id="amd"></li>
                    </ul>
                </div>
                <!------------------------------------------------------------------------------------>
                <div class="Models_filter">
                    <h2 class="Models_filter_header">მოდელი</h2>
                    <ul class="Models_filter_sub">
                        <li><label> RTX 3080</label><input type="checkbox"></li>
                        <li><label>RX 6600</label><input type="checkbox"></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--
                         =========================================================================================
                                                            PRODUCT BOX  END
                          =========================================================================================
                      -->

    </div>
@endsection
