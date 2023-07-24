<!DOCTYPE html>
<html lang="en">
<head>
<title>Onetech</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/product_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/product_responsive.css') }}">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/phone.png" alt=""></div>{{ $setting['phn'] }}</div>
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/mail.png" alt=""></div><a href="">{{ $setting['email'] }}</a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
								
							</div>
							<div class="top_bar_user">
                                @if (Route::has('login'))
                                @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
    
                                <div><div class="user_icon"><img src="images/user.svg" alt=""></div><a href="{{url('/profile')}}">Profile</a></div>
    
                                <div><a href="route('logout')"
                                    onclick="event.preventDefault();
                                this.closest('form').submit();">Logout</a></div>
                            </form>
                            @else
    
                                <div> <div class="user_icon"><img src="images/user.svg" alt=""></div><a href="{{ route('register') }}">Register</a></div>
    
                                <div> <div class="user_icon"><img src="images/user.svg" alt=""></div><a href="{{ route('login') }}">Sign in</a></div>
                                @endauth
                                @endif
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="{{ url('/') }}">OneTech</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
                                                    @foreach ($categories as $category)
                                                    <li><a href="{{url('/productbycat/'.$category->name)}}">{{$category->name}} </a></li>
                                                    @endforeach
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{ asset('images/search.png') }}" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist_icon"><img src="{{ asset('images/heart.png') }}" alt=""></div>
                                <div class="wishlist_content">
                                    <div class="wishlist_text"><a href="{{url('/all-wishlist')}}">Wishlist</a></div>
                                    <div class="wishlist_count">{{  $wishlists  }}</div>
                                </div>
                            </div>
    
                            <!-- Cart -->
                            <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon">
                                        <img src="{{ asset('images/cart.png') }}" alt="">
                                        <?php
                                                $totalitem = 0;
                                                ?>
                                            @foreach ($carts as $cart)
                                                    <?php
                                                    $totalitem =$totalitem +  $cart->quantity;
                                                    ?>
                                            @endforeach
                                        <div class="cart_count"><span>{{$totalitem}}</span></div>
                                    </div>
                                    <div class="cart_content">
                                        <div class="cart_text"><a href="{{url('/view-cart')}}">Cart</a></div>
                                        <?php
                                        $totalitem = 0;
                                        $total_cart_price = 0;
                                        ?>
                                    @foreach ($carts as $cart)
                                            <?php
                                            $totalitem =$totalitem +  $cart->quantity;
                                            $total_cart_price = $total_cart_price + $cart->total_price;
                                            ?>
                                    @endforeach
                                        <div class="cart_price">${{ $total_cart_price}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>

								<ul class="cat_menu">
                                    @foreach ($categories as $category)
                                    <li><a href="{{url('/productbycat/'.$category->name)}}">{{$category->name}} </a></li>
                                    @endforeach
								</ul>
							</div>

							<!-- Main Nav Menu -->

							

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

	

	</header>

	<!-- Single Product -->

	<div class="single_product">
		<div class="container">
			<div class="row">

				<!-- Images -->
				<div class="col-lg-2 order-lg-1 order-2">
					{{-- <ul class="image_list">
						<li data-image="images/single_4.jpg"><img src="images/single_4.jpg" alt=""></li>
						<li data-image="images/single_2.jpg"><img src="images/single_2.jpg" alt=""></li>
						<li data-image="images/single_3.jpg"><img src="images/single_3.jpg" alt=""></li>
					</ul> --}}
				</div>

				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected"><img src="{{ asset('/image/' . $products->image) }}" alt=""></div>
				</div>
                {{-- <form action="{{ url('/add_cart/' . $products->id) }}" method="post">
                    @csrf --}}
				<!-- Description -->
				<div class="col-lg-5 order-3">
					<div class="product_description">
						<div style="font-size: 18px;" class="product_category">Category: {{ $products->category }}</div>
						<div class="product_name">{{ $products->name }}</div>
						
						<div class="product_text"><p>{{ $products->description }}</p></div>
						<div class="order_info d-flex flex-row">
							<form action="{{ url('/add_cart/' . $products->id) }}" method="post">
                                @csrf
								<div class="clearfix" style="z-index: 1000;">
<!-- hidden -->
                                    <input type="hidden" value="{{ $products->name }} " class="product_category">
                                    <input class="product_name" type="hidden" name="image" value="{{ asset('/image/' . $products->image) }}">
                                    <input type="hidden" value="{{ $products->category }} " class="product_name">
                                   
                                    <input type="hidden" value="{{ $products->description }} " class="product_text">


									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Quantity: </span>
										<input name="quantity" id="quantity_input" type="number" min="1" pattern="[0-9]*" value="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
										</div>
									</div>

									<!-- Product Color -->
                                    <div class="row">
                                        <div class="col" style="border: 1px solid rgb(202, 201, 201); border-radius:5px;">
                                            <label style="color: rgb(185, 175, 175);">Size:
                                                <select name="size">
                                                    <option style="color: black;">Choose Size</option>
                                                    @foreach (Json_decode($products->size) as $sizee)
                                                        <option value="{{ $sizee }}">{{ $sizee }}</option>
                                                    @endforeach


                                                </select>
                                            </label>
                                        </div>
                                        <div class="col" style="margin-top:5px; margin-left:5px;margin-right:5px;border: 1px solid rgb(202, 201, 201); border-radius:5px;">
                                            <label style="color: rgb(185, 175, 175);">Color:
                                                <select name="color">
                                                    <option>Choose Color</option>

                                                    <option style="border: 1px solid black; border-radius:5px;" value="{{ $products->color }}">{{ $products->color }}</option>

                                                </select>
                                            </label>
                                        </div>
                                </div>

								</div>

								
                                @if ($products->discount_price)
                                
                                <div class="product_price">Price: &#2547;{{ $products->discount_price }}&nbsp;<del
                                    class="product_price">&#2547;{{ $products->price }}</del></div>
                        @else
                        <div class="product_price">Price: &#2547;{{ $products->price }}</div>
                        @endif
								<div class="button_container">
									<button type="submit" class="button cart_button">Add to Cart</button>
									
								</div>
								
							</form>
                           
						</div>
                        <form action="{{ url('/wishlist/'.$products->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-primary arrivals_single_button"style="margin-top: 10px; width: 140px;" >Add to Wishlist</button>
                        </form>
					</div>
				</div>
                
			</div>
		</div>
	</div>


	<!-- Brands -->


	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#">OneTech</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+38 068 005 3570</div>
						<div class="footer_contact_text">
							<p>17 Princess Road, London</p>
							<p>Grester London NW18JR, UK</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Find it Fast</div>
						<ul class="footer_list">
							<li><a href="#">Computers & Laptops</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Smartphones & Tablets</a></li>
							<li><a href="#">TV & Audio</a></li>
						</ul>
						<div class="footer_subtitle">Gadgets</div>
						<ul class="footer_list">
							<li><a href="#">Car Electronics</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="#">Video Games & Consoles</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Computers & Laptops</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Customer Care</div>
						<ul class="footer_list">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order Tracking</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Customer Services</a></li>
							<li><a href="#">Returns / Exchange</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Product Support</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

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

<script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{ asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{ asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{ asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{ asset('plugins/easing/easing.js')}}"></script>
<script src="{{ asset('js/product_custom.js')}}"></script>
</body>

</html>