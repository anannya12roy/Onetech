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
{{--                    <div class="product_category">{{ $products->category }}</div>--}}
{{--                    <div class="product_name">{{ $products->name }}</div>--}}
{{--                    <div class="product_text"><p>{!! $products->description !!} </p></div>--}}
                    <div class="order_info d-flex flex-row">

                            <div class="clearfix" style="z-index: 1000;">
                                <form action="{{ url('/add_cart/' . $products->id) }}" method="post">
                                    @csrf
                                <input class="product_name" type="hidden" name="image" value="{{ asset('/image/' . $products->image) }}"></input>
                                <div class="product_category" name="category">{{ $products->category }}</div>
                                <div class="product_name" name="name">{{ $products->name }}</div>
                                <input class="product_name" type="hidden" name="name" value="{{ $products->name }}"></input>
                                <div class="product_text"><p>{!! $products->description !!} </p></div>

                                    @if ($products->discount_price)
                                        <div class="product_text" name="discount_price"><p><b>Price:</b> {{ $products->discount_price }}</p></div>
                                        <del
                                            class="product-old-price">&#2547;{{ $products->price }}</del>
                                    @else
                                        <div class="product_text" name="price"><p><b>Price : </b>{{ $products->price }}</p></div>
                                    @endif

                                    <label>Size:
                                        <select class="form-control" name="size">
                                            <option>Choose Size</option>
                                            @foreach (Json_decode($products->size) as $sizee)
                                                <option value="{{ $sizee }}">{{ $sizee }}</option>
                                            @endforeach


                                        </select>
                                    </label>
                                    <label>
                                        <label>Color:
                                            <select class="form-control" name="color">
                                                <option>Choose Color</option>

                                                <option value="{{ $products->color }}">{{ $products->color }}</option>

                                            </select>
                                        </label>
                                    </label>

                            </div>
                            <div class="button_container">
                                <div class="add-to-cart">
                                    <div class="product_quantity clearfix">
                                        <span>Quantity: </span>
                                        <input id="quantity_input" type="text" pattern="[0-9]*"  name="quantity" value="1">
                                        <div class="quantity_buttons">
                                            <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
                                            <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
                                        </div>
                                    </div>
                                </div><br>
                                <button type="submit" class="button cart_button">Add to Cart</button></form><br><br>
                                <form action="{{ url('/wishlist/'.$products->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="button cart_button">Add to Wishlist</button>
                                </form>

                            </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
