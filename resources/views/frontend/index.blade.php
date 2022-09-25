@extends('layouts.frontend')
@section('content')
    <div class="content">
        <div class="content__left">
            <div class="carousell_area">
                <div class="carousell_area_box  carousell_area_box_active" data-bgColor="linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(38,78,34,1) 36%, rgba(98,223,192,1) 100%)">
                    <img src="./assets/images/1.png" alt="">
                    <h2 class="carousell_area_box_title"><a href="">intel core i9</a></h2>
                </div>

                <div class="carousell_area_box  carousell_area_box_active" data-bgColor="linear-gradient(180deg, rgba(133, 51, 255, 0.85) 24.48%, rgba(96, 185, 185, 0) 100%)">
                    <img src="./assets/images/2.png" alt="">
                    <h2 class="carousell_area_box_title"><a href="">intel core i9</a></h2>
                </div>
                <div class="carousell_area_box  carousell_area_box_active" data-bgColor="linear-gradient(180deg, rgba(178, 0, 0, 0.85) 24.48%, rgba(96, 185, 185, 0) 100%)">
                    <img src="./assets/images/3.png" alt="">
                    <h2 class="carousell_area_box_title"><a href="">intel core i9</a></h2>
                </div>

                <div class="carousell_area_arrows">
                    <span class="carousell_area_arrows_left"></span>
                    <span class="carousell_area_arrows_right"></span>
                </div>
            </div>
            <!--
                 =========================================================================================
                 CAROUSEL AREA  END
                  =========================================================================================
              -->
            <div class="content__left_new">
                <div class="content__left_new_content content__left_new_content_active">
                    <img src="./assets/images/3.png">
                </div>
                <div class="content__left_new_content">
                    <img src="./assets/images/1.png">
                </div>
                <div class="content__left_new_content">
                    <img src="./assets/images/5.png">
                </div>
                <!--
                        =========================================================================================
                        NEW PRODUCTS LEFT CONTENT   END
                         =========================================================================================
                     -->
            </div>
            <!--
             =========================================================================================
             NEW PRODUCTS LEFT    END
              =========================================================================================
          -->
        </div>
        <!--
             =========================================================================================
             NEW LEFT AREA   END
              =========================================================================================
          -->
        <div class="content__right">
            <div class="content__right_top">
                <div class="content_right_top_box content_right_top_box_active">
                    <a href="" class="content__right_top_box_a">
                        <img src="./assets/images/2.png">
                        <h2>intel core i9</h2>
                    </a>
                </div>
                <div class="content_right_top_box">
                    <a href="" class="content__right_top_box_a">
                        <img src="./assets/images/3.png">
                        <h2>intel core i9</h2>
                    </a>
                </div>
                <div class="content_right_top_box">
                    <a href="" class="content__right_top_box_a">
                        <img src="./assets/images/5.png">
                        <h2>intel core i9</h2>
                    </a>
                </div>
            </div>

            <div class="content__right_bottom">
                <div class="content__right_bottom_box">


                    <span class="Line"></span>
                    <h2>HIGH END GAMING COMPONENTS</h2>
                    <div class="content__right_bottom_sub">
                        <h3>Premium Perfomance</h3>
                        <img src="./assets/images/4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--
         =========================================================================================
         NEW RIGHT AREA   END
          =========================================================================================
      -->
    </div>
    <!--
               =========================================================================================
                                                  CONTENT AREA END
                =========================================================================================
            -->
@endsection
