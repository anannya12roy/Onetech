@extends('user.master')

@section('user.content')
<div class="single_product">
    <div class="container">
        <div  class="row">

            <!-- Images -->
            {{-- <div class="col-lg-2 order-lg-1 order-2">
                <ul class="image_list">
                    <li data-image="images/single_4.jpg"><img src="{{ asset('/image/' . $products->image) }}" alt=""></li>
                </ul>
            </div> --}}

            <!-- Selected Image -->
            <div class="col-lg-12 order-lg-2 order-1">
              <img style="width: 100px;" src="{{ asset('/image/' . $products->image) }}" alt="">
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
                                {{-- <img style="width: 200px;"  name="image" value="{{ asset('/image/' . $products->image) }}"> --}}
                               
                                <div style="font-size: 20px;" class="product_name" name="name">{{ $products->name }}</div>
                                <div class="product_category" name="category">{{ $products->category }}</div>
                                {{-- <input class="product_name" type="hidden" name="name" value="{{ $products->name }}"> --}}
                                <div class="product_text"><p>{!! $products->description !!} </p></div>

                                    @if ($products->discount_price)
                                        <div class="product_text" name="discount_price"><p><b>Price:</b> &#2547; {{ $products->discount_price }} &nbsp
                                        <del
                                            class="product-old-price">&#2547;{{ $products->price }}</del></p></div>
                                    @else
                                        <div class="product_text" name="price"><p><b>Price : </b>&#2547;{{ $products->price }}</p></div>
                                    @endif

                                    <div class="row">
                                    
                                    <div style="border: 1px solid rgb(163, 163, 163); border-radius:10px; padding:5px;" >
                                    <label>Size:
                                        <select  name="size">
                                            <option style="text-decoration: none;">Choose Size</option>
                                            @foreach (Json_decode($products->size) as $sizee)
                                                <option  style="text-decoration: none;" value="{{ $sizee }}">{{ $sizee }}</option>
                                            @endforeach


                                        </select>
                                    </label>
                                </div>
                                <div style=" margin-left:5px; border: 1px solid rgb(163, 163, 163); border-radius:10px; padding:5px;"  >
                                    <label>
                                        <label>Color:
                                            <select class="" name="color">
                                                <option>Choose Color</option>

                                                <option value="{{ $products->color }}">{{ $products->color }}</option>

                                            </select>
                                        </label>
                                    </label>
                                </div>
                            </div>
                                    <div  class="">
                                        <div class="">
                                            <span>Quantity:<br></span>
                                            <input style=" margin-right:5px; border: 1px solid rgb(163, 163, 163); border-radius:10px; padding:5px;" id="quantity_input" type="number"   name="quantity" min="1" value="1">
                                           
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="arrivals_single_button" style="margin-top: 10px; width: 140px;">Add to Cart</button></form>
                                <form action="{{ url('/wishlist/'.$products->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="arrivals_single_button"style="margin-top: 10px; width: 140px;" >Add to Wishlist</button>
                                </form>

                            </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
