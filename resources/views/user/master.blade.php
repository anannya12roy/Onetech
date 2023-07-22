<!DOCTYPE html>
<html lang="en">
<head>
<title>OneTech</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset ('styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ ('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet') }}" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset ('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('plugins/slick-1.8.0/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('styles/responsive.css') }}">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	@include('user.header')
	<!-- Banner -->

	<div class="banner">
		<div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h1 class="banner_text">new era of smartphones</h1>
						<div class="banner_price"><span>$530</span>$460</div>
						<div class="banner_product_name">Apple Iphone 6s</div>
						<div class="button banner_button"><a href="#">Shop Now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Characteristics -->

	<div class="characteristics">
		<div class="container">
			<div class="row">

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_1.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_2.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_3.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_4.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Deals of the week -->

	

	<!-- Popular Categories -->


	<!-- Banner -->

	<div class="banner_2">
		<div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
		<div class="banner_2_container">
			<div class="banner_2_dots"></div>
			<!-- Banner 2 Slider -->

			
		</div>
	</div>

	<!-- Hot New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Hot New Arrivals</div>
							<ul class="clearfix">
								<li class=""></li>
							
								<li></li>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-9" style="z-index:1;">

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Astro M2 Black</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										

									
										

										
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

								<!-- Product Panel -->
								<div class="product_panel panel">
									<div class="arrivals_slider slider">

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button active">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
										<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

								<!-- Product Panel -->
								<div class="product_panel panel">
									<div class="arrivals_slider slider">

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button active">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
										<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

							</div>


						</div>
								
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Best Sellers -->

	




	<!-- Brands -->

	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">
						
						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">
							
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_1.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_2.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_3.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_4.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_5.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_6.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_7.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_8.jpg" alt=""></div></div>

						</div>
						
						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>

@include('user.newsletter')
	<!-- Footer -->
@include('user.footer')
	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="{{asset ('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{asset ('styles/bootstrap4/popper.js') }}"></script>
<script src="{{asset ('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{asset ('plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{asset ('plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{asset ('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{asset ('plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{asset ('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{asset ('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{asset ('plugins/slick-1.8.0/slick.js') }}"></script>
<script src="{{asset ('plugins/easing/easing.js') }}"></script>
<script src="{{asset ('js/custom.js') }}"></script>
</body>

</html>