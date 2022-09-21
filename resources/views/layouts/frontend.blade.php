<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<title>YourTechnology market page</title>
</head>
<body>
<div id="wrapper">
	<header id="header">
		<section class="burger_menu_icon">
			<i class="fa-solid fa-bars"></i>
		</section>
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
				<li><a href="index.html">მთავარი</a></li>
				<li><a href="market.html">მაღაზია</a></li>
				<li><a href="sales.html">ფასდაკლება</a></li>
				<li><a href="about.html">ჩვენს შესახებ</a></li>
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
							<li class="shopingCart_Ul_Content_items_item">
								<div class="shopingCart_Ul_Content_items_desc">
									<img class="shopingCart_Ul_Content_items_desc_img" src="./assets/images/product_images/video_card.png">
									<span class="shopingCart_Ul_Content_items_desc_title">RTX 3090 TI</span>
								</div>
								<span class="shopingCart_Ul_Content_items_price">999$</span>
								<div class="shopingCart_Ul_Content_items_Counter">
									<span class="shopingCart_Ul_Content_items_Counter_minus">-</span>
									<span class="shopingCart_Ul_Content_items_Counter_count">100</span>
									<span class="shopingCart_Ul_Content_items_Counter_Plus">+</span>
								</div>

								<span class="shopingCart_Ul_Content_items_item_Remove">X</span>
							</li>
						</ul>
						<ul class="shopingCart_Ul_Content_items_sub">
							<li class="shopingCart_Ul_Content_items_sub__Chechout">გადახდა</li>
							<li class="shopingCart_Ul_Content_items_sub__Total">
								<span class="shopingCart_Ul_Content_items_sub__Total_title">ჯამი</span>
								<span class="shopingCart_Ul_Content_items_sub__Total_sum">0$</span>
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
				  SEARCH END
				  =========================================================================================
			  -->


	</header>
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
	<script src="./assets/js/main.js"></script>

</div>
</body>
</html>
