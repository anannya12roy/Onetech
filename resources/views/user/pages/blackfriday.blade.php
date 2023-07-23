@extends('user.master')
@section('user.content')



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



							<ul class="clearfix">
							</ul>


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
                          

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Best Sellers -->

@endsection
