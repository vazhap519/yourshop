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


</header>
