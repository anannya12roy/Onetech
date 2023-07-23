@extends('user.master')
@section('user.content')
    @include('user.nav')

    <div class="banner">
        @foreach ($hotdeals as $hotdeal)
        <div class="banner_background" style="background-image: url('{{ asset('images/hotdeal/'.$hotdeal->image) }}'); background-repeat: no-repeat; background-position: center center;
            background-size: cover;
            height: 350px;
            margin-bottom: 0;"></div>
        @endforeach
        <div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>
        <div class="container fill_height">

            <div class="row fill_height">


                <div class="col-lg-5 offset-lg-4 fill_height">
                    <div class="banner_content">
                        <h1 class="banner_text">{{$hotdeal->frst_desp}}</h1>
                        <div class="banner_product_name">{{$hotdeal->scnd_desp}}</div>
                        <div class="button banner_button"><a href="{{url('/black_friday/{name}')}}">Shop Now</a></div>
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
							</ul>

							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
                            @foreach ($products as $product)


                            <div class="col-lg-3">
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><img src="{{ asset('/image/' . $product->image) }}" alt=""></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_category"><a href="#">{{ $product->name }}</a></div>
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="#">{{ $product->category }}</a></div>
                                                @if ($product->discount_price)
												<div class="arrivals_single_price text-right">{{ $product->discount_price }}&nbsp&nbsp;<del
                                                class="product-old-price">&#2547;{{ $product->price }}</del></div>
                                        @else
                                        <div class="arrivals_single_price text-right">{{ $product->price }}</div>
                                        @endif
											</div>
											<a href="{{ url('/product-details/'.$product->id) }}" type="submit" class="arrivals_single_button" style="text-align: center; height: 32px;" >Add to Cart</a>
										</div>
                                        <form action="{{ url('/wishlist/'.$product->id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="arrivals_single_button" style="margin-top: 5px;">Add to Wishlist</button>

                                        </form>
										<ul class="arrivals_single_marks product_marks">
											<li class="arrivals_single_mark product_mark product_new">new</li>
										</ul>
									</div>
								</div>
							</div>
                            @endforeach
                            {{--  <div class="col-lg-3">
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><img src="images/new_single.png" alt=""></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_category"><a href="#">Smartphones</a></div>
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
												<div class="arrivals_single_price text-right">$379</div>
											</div>
											<div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<form action="#"><button class="arrivals_single_button">Add to Cart</button></form>
										</div>
										<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
										<ul class="arrivals_single_marks product_marks">
											<li class="arrivals_single_mark product_mark product_new">new</li>
										</ul>
									</div>
								</div>
							</div>
                            <div class="col-lg-3">
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><img src="images/new_single.png" alt=""></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_category"><a href="#">Smartphones</a></div>
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
												<div class="arrivals_single_price text-right">$379</div>
											</div>
											<div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<form action="#"><button class="arrivals_single_button">Add to Cart</button></form>
										</div>
										<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
										<ul class="arrivals_single_marks product_marks">
											<li class="arrivals_single_mark product_mark product_new">new</li>
										</ul>
									</div>
								</div>
							</div>
                            <div class="col-lg-3">
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><img src="images/new_single.png" alt=""></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_category"><a href="#">Smartphones</a></div>
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
												<div class="arrivals_single_price text-right">$379</div>
											</div>
											<div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<form action="#"><button class="arrivals_single_button">Add to Cart</button></form>
										</div>
										<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
										<ul class="arrivals_single_marks product_marks">
											<li class="arrivals_single_mark product_mark product_new">new</li>
										</ul>
									</div>
								</div>
							</div>  --}}

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
@endsection
