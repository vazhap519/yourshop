<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
	<link rel="stylesheet" type="text/css"
		  href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css')}}">
	<title>@yield('title')</title>
</head>
<body>
<div id="wrapper">
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
        <ul class="userArea">
            <li class="LoginArea">
                <ul class="LoginAreaUl">
                    <li class="LoginAreaUl_ico"></li>
                    <li class="LoginAreaUl_Content">

                        <form method="POST" action="{{ route('login') }}" class="LoginAreaUl_Content_Form">
                            @csrf

                            <div class="LoginAreaUl_Content_Form_Inputs">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                <section class="LoginAreaUl_Content_Form_resets">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                        <label class="form-check-label" for="remember">

                                        </label>

                                            <a class="LoginAreaUl_Content_Form_resets_forgot" href="">
                                            </a>

                                    </div>



                                </section>
                            </div>


                            <div class="LoginAreaUl_Content_Form_Buttons">
                        <button type="submit" id="SignIn" name="SignIn">  </button>
                        <button type="submit" id="SignUp" name="SignUp"></button>
</div>
                        </form>
{{--                        @section('scripts')--}}
{{--                            <script>--}}
{{--                                $(document).ready(function() {--}}
{{--                                    $('.LoginAreaUl_Content_Form').validate({--}}
{{--                                        rules: {--}}
{{--                                            email: {--}}
{{--                                                required: true,--}}
{{--                                                email: true--}}
{{--                                            },--}}
{{--                                            password: {--}}
{{--                                                required: true--}}
{{--                                            }--}}
{{--                                        },--}}
{{--                                        messages: {--}}
{{--                                            email: {--}}
{{--                                                required: "{{ __('Per favore inserisci il tuo indirizzo e-mail.') }}",--}}
{{--                                                email: "{{ __('Per favore inserisci un indirizzo e-mail valido.') }}"--}}
{{--                                            },--}}
{{--                                            password: {--}}
{{--                                                required: "{{ __('Per favore inserisci la password.') }}"--}}
{{--                                            }--}}
{{--                                        },--}}
{{--                                        submitHandler: function(form) {--}}
{{--                                            $.ajaxSetup({--}}
{{--                                                headers: {--}}
{{--                                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'--}}
{{--                                                }--}}
{{--                                            });--}}

{{--                                            $.ajax({--}}
{{--                                                type: "post",--}}
{{--                                                url: "{{ route('login') }}",--}}
{{--                                                data: $(form).serialize(),--}}
{{--                                                success: function (response) {--}}
{{--                                                    console.log(response.errors.length);--}}
{{--                                                    location.reload({{ url('home') }});--}}
{{--                                                },--}}
{{--                                                error: function(data, textStatus, jqXHR) {--}}
{{--                                                    alert(textStatus + ': ' + jqXHR + ' (' + data + ')');--}}
{{--                                                }--}}
{{--                                            });--}}
{{--                                        }--}}
{{--                                    });--}}
{{--                                });--}}
{{--                            </script>--}}
{{--                        @endsection--}}
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
                            <li class="shopingCart_Ul_Content_items_item">
                                <div class="shopingCart_Ul_Content_items_desc">
                                    <img class="shopingCart_Ul_Content_items_desc_img" src="./assets/images/product_images/phone.png">
                                    <span class="shopingCart_Ul_Content_items_desc_title">rtx 3090</span>
                                </div>
                                <span class="shopingCart_Ul_Content_items_price">2₾</span>
                                <div class="shopingCart_Ul_Content_items_Counter">
                                    <span class="shopingCart_Ul_Content_items_Counter_minus">-</span>
                                    <input class="shopingCart_Ul_Content_items_Counter_count" type="number" value="1">
                                    <span class="shopingCart_Ul_Content_items_Counter_Plus">+</span>
                                </div>

                                <span class="shopingCart_Ul_Content_items_item_Remove">X</span>
                            </li>
                            <li class="shopingCart_Ul_Content_items_item">
                                <div class="shopingCart_Ul_Content_items_desc">
                                    <img class="shopingCart_Ul_Content_items_desc_img" src="./assets/images/product_images/phone.png">
                                    <span class="shopingCart_Ul_Content_items_desc_title">rtx 3090</span>
                                </div>
                                <span class="shopingCart_Ul_Content_items_price">2₾</span>
                                <div class="shopingCart_Ul_Content_items_Counter">
                                    <span class="shopingCart_Ul_Content_items_Counter_minus">-</span>
                                    <input class="shopingCart_Ul_Content_items_Counter_count" type="number" value="1">
                                    <span class="shopingCart_Ul_Content_items_Counter_Plus">+</span>
                                </div>

                                <span class="shopingCart_Ul_Content_items_item_Remove">X</span>
                            </li>

                            <li class="shopingCart_Ul_Content_items_item">
                                <div class="shopingCart_Ul_Content_items_desc">
                                    <img class="shopingCart_Ul_Content_items_desc_img" src="./assets/images/product_images/phone.png">
                                    <span class="shopingCart_Ul_Content_items_desc_title">rtx 3090</span>
                                </div>
                                <span class="shopingCart_Ul_Content_items_price">3₾</span>
                                <div class="shopingCart_Ul_Content_items_Counter">
                                    <span class="shopingCart_Ul_Content_items_Counter_minus">-</span>
                                    <input class="shopingCart_Ul_Content_items_Counter_count" type="number" value="1">
                                    <span class="shopingCart_Ul_Content_items_Counter_Plus">+</span>
                                </div>

                                <span class="shopingCart_Ul_Content_items_item_Remove">X</span>
                            </li>

                            <li class="shopingCart_Ul_Content_items_item">
                                <div class="shopingCart_Ul_Content_items_desc">
                                    <img class="shopingCart_Ul_Content_items_desc_img" src="./assets/images/product_images/phone.png">
                                    <span class="shopingCart_Ul_Content_items_desc_title">rtx 3090</span>
                                </div>
                                <span class="shopingCart_Ul_Content_items_price">2₾</span>
                                <div class="shopingCart_Ul_Content_items_Counter">
                                    <span class="shopingCart_Ul_Content_items_Counter_minus">-</span>
                                    <input class="shopingCart_Ul_Content_items_Counter_count" type="number" value="1">
                                    <span class="shopingCart_Ul_Content_items_Counter_Plus">+</span>
                                </div>

                                <span class="shopingCart_Ul_Content_items_item_Remove">X</span>
                            </li>

                            <li class="shopingCart_Ul_Content_items_item">
                                <div class="shopingCart_Ul_Content_items_desc">
                                    <img class="shopingCart_Ul_Content_items_desc_img" src="./assets/images/product_images/phone.png">
                                    <span class="shopingCart_Ul_Content_items_desc_title">rtx 3090</span>
                                </div>
                                <span class="shopingCart_Ul_Content_items_price">2₾</span>
                                <div class="shopingCart_Ul_Content_items_Counter">
                                    <span class="shopingCart_Ul_Content_items_Counter_minus">-</span>
                                    <input class="shopingCart_Ul_Content_items_Counter_count" type="number" value="1">
                                    <span class="shopingCart_Ul_Content_items_Counter_Plus">+</span>
                                </div>

                                <span class="shopingCart_Ul_Content_items_item_Remove">X</span>
                            </li>

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
    <!--
               =========================================================================================
                                                  HEADER AREA END
                =========================================================================================
            -->
	<!--
			   =========================================================================================
												  HEADER AREA END
				=========================================================================================
			-->
	@yield('content')




    <footer id="footer">
        <ul class="footer_social">
            <li id="fb"><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
            <li id="insta"><a href=""><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
        <div class="footer_logo">
            <span>Your Technology</span>
        </div>

        <div class="footer_copyryght">
            <div class="footer_copyryght_content">
                <span class="changeCopy">copyright</span> &copy;<span class="changeCopyyar">2022</span>
            </div>

        </div>
    </footer>


	<!--
		 =========================================================================================
		 FOOTER END
		  =========================================================================================
	  -->
    <script src="{{asset('/assets/js/jquery.js')}}"></script>
	<script src="{{asset('/assets/js/main.js')}}"></script>

</div>
</body>
</html>
