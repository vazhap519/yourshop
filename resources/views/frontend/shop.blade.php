@extends('layouts.frontend');
@section('content')
    <div class="content market_content">
        <nav class="mega_menu">
            <ul class="mega_menu_ul">
                <li>
                    <a href="">pc && accsessores</a>
                    <div class="mega_menu_ul_sub">
                        <ul>
                            <li>
                                <a href="" class="mega_menu_ul_sub_header">pc parts</a>
                                <div class="mega_menu_ul_sub_sub">
                                    <ul>
                                        <li><a href="">პროცესორი</a></li>
                                        <li><a href="">ოპერატიული მეხსიერება</a></li>
                                        <li><a href="">მყარი დისკი</a></li>
                                        <li><a href="">კვების ბლოკი</a></li>
                                        <li><a href="">დედაბარათი</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="" class="mega_menu_ul_sub_header">pc parts</a>
                                <div class="mega_menu_ul_sub_sub">
                                    <ul>
                                        <li><a href="">პროცესორი</a></li>
                                        <li><a href="">ოპერატიული მეხსიერება</a></li>
                                        <li><a href="">მყარი დისკი</a></li>
                                        <li><a href="">კვების ბლოკი</a></li>
                                        <li><a href="">დედაბარათი</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="" class="mega_menu_ul_sub_header">pc parts</a>
                                <div class="mega_menu_ul_sub_sub">
                                    <ul>
                                        <li><a href="">პროცესორი</a></li>
                                        <li><a href="">ოპერატიული მეხსიერება</a></li>
                                        <li><a href="">მყარი დისკი</a></li>
                                        <li><a href="">კვების ბლოკი</a></li>
                                        <li><a href="">დედაბარათი</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="" class="mega_menu_ul_sub_header">pc parts</a>
                                <div class="mega_menu_ul_sub_sub">
                                    <ul>
                                        <li><a href="">პროცესორი</a></li>
                                        <li><a href="">ოპერატიული მეხსიერება</a></li>
                                        <li><a href="">მყარი დისკი</a></li>
                                        <li><a href="">კვების ბლოკი</a></li>
                                        <li><a href="">დედაბარათი</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                </li>
                <li><a href="">PC Components Gaming Consoles</a>

                </li>
                <li><a href="">Home Appliances</a></li>
            </ul>
        </nav>
        <!--
                         =========================================================================================
                                                             MEGA MENU END
                          =========================================================================================
                      -->


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
                        @foreach($products as $product)
                    <li>
                        <a href="{{route('single_product',$product->id)}}}">
                            <img src="{{asset('assets/images/product_images',$product->image)}}" alt="">
                            <h3 class="product_boxes_area_Right_Content_product_title">{{$product->name}}</h3>
                        </a>
                        <section class="product_box_area_Right_Content_meta">
                            <div class="product_box_area_right_Content_desc">
               <span  class="product_box_area_right_Content_desc_add_To_Cart" >
                   <i class="fa-solid fa-cart-shopping"></i>
            </span>
                                <span class="product_box_area_right_Content_desc_Price">{{$product->price}}₾</span>
                                <span class="product_box_area_right_Content_desc_add_To_Fav" ><i class="fa-solid fa-heart"></i></span>
                            </div>
                        </section>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--
                         =========================================================================================
                                                            PRODUCT BOX  END
                          =========================================================================================
                      -->

    </div>
@endsection
