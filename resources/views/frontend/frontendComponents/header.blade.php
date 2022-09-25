
<header id="header">
    <div class="logoArea">
        <a href="">
            Your Technology
        </a></div>
    <!--
             =========================================================================================
             LOGO END
              =========================================================================================
          -->

    <nav class="navbar">
        <ul class="navbar_ul">
            <li><a href="{{url('/')}}">მთავარი</a></li>
            <li><a href="{{url('/shop')}}">მაღაზია</a></li>
            <li><a href="{{url('/sale')}}">ფასდაკლება</a></li>
            <li><a href="{{url('/about')}}">ჩვენს შესახებ</a></li>

            <li><a href="{{url('$item->link')}}"></a></li>
        </ul>
    </nav>
    <!--
             =========================================================================================
             NAVBAR  END
              =========================================================================================
          -->

    @include('.frontend.frontendComponents.userarea')
    </nav>
    <!--
             =========================================================================================
             NAVBAR  END
              =========================================================================================
          -->
    <ul class="userArea">
        <li class="LoginArea">
            <ul class="LoginAreaUl">
                <li class="LoginAreaUl_ico"></li>
                <li class="LoginAreaUl_Content">

                    <form  class="LoginAreaUl_Content_Form">
                        <div class="LoginAreaUl_Content_Form_Inputs">
                            <label for="email" >ემაილი</label>
                            <input type="email" id="email" name="email" placeholder="admin@expample.com">
                            <label for="password" >პაროლი</label>
                            <input type="password"  placeholder="password"  id="password" name="password">
                        </div>

                        <div class="LoginAreaUl_Content_Form_Buttons">
                            <button type="submit" id="SignIn" name="SignIn">შესვლა</button>
                            <button type="submit" id="SignUp" name="SignUp">რეგისტრაცია</button>
                        </div>
                    </form>
                </li>
            </ul>
            <!--
             =========================================================================================
              SALES CONTAINER HEADER END
              =========================================================================================
          -->
        </li>
        <!--
            =========================================================================================
             LoginAreaEnd
             =========================================================================================
         -->
        <li class="shopingCart">
            <ul class="shopingCart_Ul">
                <li class="shopingCart_Ul_Ico"></li>
                <li class="shopingCart_Ul_Content">
                    <h3 class="shopingCart_Ul_Content_header">საყიდლების სია</h3>
                    <ul class="shopingCart_Ul_Content_items">

                    </ul>
                    <ul class="shopingCart_Ul_Content_items_sub">
                        <li class="shopingCart_Ul_Content_items_sub__Chechout">გადახდა</li>
                        <li class="shopingCart_Ul_Content_items_sub__Total">
                            <span class="shopingCart_Ul_Content_items_sub__Total_title">ჯამი</span>
                            <span class="shopingCart_Ul_Content_items_sub__Total_sum">999$</span>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!--
    =========================================================================================
     ShopingCartAreaEnd
     =========================================================================================
 -->


        <li class="Favorites">
            <ul class="Favorites_Ul">
                <li class="Favorites_Ul_Ico"></li>
                <li class="Favorites_Ul_Content">
                    <h3>სურვილების სია</h3>
                    <ul class="Favorites_Ul_Content_Sub">
                        <li class="Favorites_Ul_Content_Sub_C">
                            <div class="Favorites_Ul_Content_Sub_R">
                                <img src="./assets/images/product_images/video_card.png">
                                <span class="Favorites_Ul_Content_Sub_R_Title">RTX 3090 Ti</span>
                            </div>
                            <span class="Favorites_Ul_Content_Sub_C_Ico"></span>
                        </li>
                        <li class="Favorites_Ul_Content_Sub_C">
                            <div class="Favorites_Ul_Content_Sub_R">
                                <img src="./assets/images/product_images/video_card.png">
                                <span class="Favorites_Ul_Content_Sub_R_Title">RTX 3090 Ti</span>
                            </div>
                            <span class="Favorites_Ul_Content_Sub_C_Ico"></span>
                        </li>
                        <li class="Favorites_Ul_Content_Sub_C">
                            <div class="Favorites_Ul_Content_Sub_R">
                                <img src="./assets/images/product_images/video_card.png">
                                <span class="Favorites_Ul_Content_Sub_R_Title">RTX 3090 Ti</span>
                            </div>
                            <span class="Favorites_Ul_Content_Sub_C_Ico"></span>
                        </li>
                        <li class="Favorites_Ul_Content_Sub_C">
                            <div class="Favorites_Ul_Content_Sub_R">
                                <img src="./assets/images/product_images/video_card.png">
                                <span class="Favorites_Ul_Content_Sub_R_Title">RTX 3090 Ti</span>
                            </div>
                            <span class="Favorites_Ul_Content_Sub_C_Ico"></span>
                        </li>
                        <li class="Favorites_Ul_Content_Sub_C">
                            <div class="Favorites_Ul_Content_Sub_R">
                                <img src="./assets/images/product_images/video_card.png">
                                <span class="Favorites_Ul_Content_Sub_R_Title">RTX 3090 Ti</span>
                            </div>
                            <span class="Favorites_Ul_Content_Sub_C_Ico"></span>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!--
                     =========================================================================================
                     WISHLIST END
                      =========================================================================================
                  -->
        <li class="Search_area">
            <input type="search" name="search" class="search_input">
            <button type="submit" class="search_input_btn"></button>
        </li>
    </ul>
    <!--
             =========================================================================================
              USER AREA END
              =========================================================================================
          -->

    <section class="burger_menu_icon">
        <i class="fa-solid fa-bars"></i>
    </section>

</header>
