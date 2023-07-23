@extends('user.master')

@section('user.content')

<div class="container">

<h4 style="margin-top: 10px;">{{Auth::user()->name}} Your orders  </h4>

    <table style="margin-top: 5%;" class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Discount price</th>
            <th scope="col">Base price</th>
            <th scope="col">Total price</th>
          </tr>
        </thead>

        <tbody>
        <?php
        $total_cart_price = 0;
        $totalitem = 0;
        ?>
        @foreach ($carts as $cart)
                <?php

                $total_cart_price = $total_cart_price + $cart->total_price;
                ?>

          <tr>
          <td>{{$cart->product_name}}</td>
          <td><img name="image" style="height: auto; width: 70px"
                   src="{{ asset('/image/' .  $cart->image) }}"></td>
          <td>{{$cart->price}}</td>
          <td>{{$cart->discount_price}}</td>
          <td>{{$cart->base_price}}</td>
          <td>{{$cart->total_price}}</td>


          </tr>
        @endforeach


        </tbody>
    </table>
</div>
@endsection
