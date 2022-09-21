@extends('layouts.frontend')
@section('content')
	<div class="content sales_content">
		<h1 class="sales_content_header">ფასდაკლებული პროდუქცია</h1>
		<!--
				=========================================================================================
				 SALES CONTAINER HEADER END
				 =========================================================================================
			 -->
		<div class="product_boxes_area">
			<div class="product_boxes_area_Right product_boxes_area_Right_Sales">
				<ul class="product_boxes_area_Right_Content">
					<li>
						<a href="">
							<img src="./assets/images/1.png" alt="">
							<section class="product_box_area_Right_Content_meta">
								<h3>personal computer</h3>
								<div class="product_box_area_right_Content_desc">
									<span  class="product_box_area_right_Content_desc_add_To_Cart" ><i class="fa-solid fa-cart-shopping"></i></span>
									<div class="sales_price">
										<span class="product_box_area_right_Content_desc_Price product_box_area_right_Content_desc_Price_old">500$</span>
										<span class="product_box_area_right_Content_desc_Price_new">500$</span>
									</div>
									<span class="product_box_area_right_Content_desc_add_To_Fav" ><i class="fa-solid fa-heart"></i></span>
								</div>
							</section>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!--
			 =========================================================================================
			 SALE PRODUCTS BOXES END
			  =========================================================================================
		  -->
	</div>
@endsection
