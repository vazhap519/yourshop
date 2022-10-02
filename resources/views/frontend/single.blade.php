@extends('layouts.frontend')
@section('content')
    <div class="content single_product_content">
        <div class="single_product_content_Top_desc">
            <div class="single_product_content_Top_desc_ToP">
                <div class="single_product_content_Top_desc_Left">
                    <div class="single_product_content_Top_desc_Left_top">
                        <img src="./assets/images/product_images/ps.png" alt="" class="single_product_content_Top_desc_Left_img">
                        <div class="single_product_content_Top_desc_Left_price">500$</div>
                    </div>

                    <section class="single_product_content_Top_desc_Left_colors">
                        <h2>პროდუქტის ფერები</h2>
                        <form class="colors">
                            <button   value="gray" class="gray color"></button>
                            <button  value="blue" class="black color"></button>

                        </form>

                    </section>
                </div>
                <!--
                               =========================================================================================
                                                                  SINGLE PRODUCT TOP DESCRIPTION LEFT  END
                                =========================================================================================
                            -->

                <div class="single_product_content_Top_desc_right">
                    <h1 class="single_product_content_Top_desc_right_header">
                        {{$products->name}}
                    </h1>
                    <ul class="single_product_content_Top_desc_right_ul">

                        <li> {{$products->description}}</li>

                    </ul>

                    <div class="single_product_content_Top_desc_right_payment_area">
                        <div class="single_product_content_Top_desc_right_payment_area_Price">
                            <ul class="single_product_content_Top_desc_right_payment_area_Price_H">
                                <li class="single_product_content_Top_desc_right_payment_area_Price_H_text">ფასი</li>
                                <li class="single_product_content_Top_desc_right_payment_area_Price_price"> {{$products->price}}</li>
                            </ul>


                            <ul class="single_product_content_Top_desc_right_payment_area_buyng">
                                <li>
                                    <div class="single_product_content_Top_desc_right_payment_area_quant">
                                        <span class="single_product_content_Top_desc_right_payment_area_Price_min single_product_content_Top_desc_right_payment_area_Price_symbols" >-</span>
                                        <input type="number" class="single_product_content_Top_desc_right_payment_area_Price_quanty">
                                        <span class="single_product_content_Top_desc_right_payment_area_Price_plus single_product_content_Top_desc_right_payment_area_Price_symbols">+</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{route('checkout',$products->id)}}" class="checkout_btn">შეძენა</a>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
                <!--
                               =========================================================================================
                                                                  SINGLE PRODUCT TOP DESCRIPTION RIGHT  END
                                =========================================================================================
                            -->
            </div>

            <div class="Single_Product_Logo">
                <p>Your Technology</p>
            </div>
        </div>
    </div>
    <!--
                   =========================================================================================
                                                      SINGLE PRODUCT   END
                    =========================================================================================
                -->
@endsection

