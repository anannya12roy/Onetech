@extends('user.master')

@section('user.content')
<div class="single_product">
    <div class="container">
        <div class="row">

            <!-- Images -->
            <div class="col-lg-2 order-lg-1 order-2">
                <ul class="image_list">
                    <li data-image="images/single_4.jpg"><img src="{{ asset('/image/' . $products->image) }}" alt=""></li>
                </ul>
            </div>

            <!-- Selected Image -->
            <div class="col-lg-5 order-lg-2 order-1">
                <div class="image_selected"><img src="images/single_4.jpg" alt=""></div>
            </div>

            <!-- Description -->
            <div class="col-lg-5 order-3">
                <div class="product_description">
                    <div class="product_category">{{ $products->category }}</div>
                    <div class="product_name">{{ $products->name }}</div>
                    <div class="product_text"><p>{{  $products->description  }}</p></div>
                    <div class="order_info d-flex flex-row">
                        <form action="#">
                            <div class="clearfix" style="z-index: 1000;">

                                <!-- Product Quantity -->
                                <div class="product_quantity clearfix">
                                    <span>Quantity: </span>
                                    <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                    <div class="quantity_buttons">
                                        <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
                                        <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
                                    </div>
                                </div>

                                <!-- Product Color -->
                                <ul class="product_color">
                                    <li>
                                        <span>Color: </span>
                                        <div class="color_mark_container"><div id="selected_color" class="color_mark"></div></div>
                                        <div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

                                        <ul class="color_list">
                                            <li><div class="color_mark" style="background: #999999;"></div></li>
                                            <li><div class="color_mark" style="background: #b19c83;"></div></li>
                                            <li><div class="color_mark" style="background: #000000;"></div></li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>

                            @if ($products->discount_price)
                            <div class="product_price">{{ $products->discount_price }}</div><del
                            class="product-old-price">&#2547;{{ $products->price }}</del>
                            @else
                            <div class="product_price">{{ $products->price }}</div>
                            @endif
                            <div class="button_container">
                                <button type="button" class="button cart_button">Add to Cart</button>
                                <button type="button" class="button cart_button">Add to Wishlist</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
