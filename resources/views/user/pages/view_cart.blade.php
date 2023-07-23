@extends('user.master')

@section('user.content')

    <div class="container">
        <?php
        $totalitem = 0;
        ?>
        @foreach ($carts as $cart)
                <?php
                $totalitem = $totalitem + $cart->quantity;
                ?>
        @endforeach
        <h4 style="margin-top: 10px;">{{Auth::user()->name}} Your cart Item ({{$totalitem}}) </h4>

        <table style="margin-top: 5%;" class="table table-bordered">
            <thead>
            <tr>
                <th></th>
                <th scope="col">Product Name</th>
                <th scope="col">Size</th>
                <th scope="col">Color</th>
                <th scope="col">Image</th>
                <th scope="col">Base price</th>
                <th scope="col">Discount price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total price</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($carts as $cart)

                <tr>
                    <th><a href="{{url('/delete_cart/'.$cart->id)}}" onclick=" confirmation(event)" style="height:25%; margin-left: 15px;  border-style: none;"  class="delete"><i  class="fa fa-times"></i></a>
                    <td>{{  $cart->product_name}}</td>
                    <td>Size: {{  $cart->size}}</td>
                    <td>Color: {{  $cart->color}}</td>
                    <td><img name="image" style="height: auto; width: 70px"
                             src="{{ asset('/image/' . $cart->image) }}"></td>
                    <td>{{  $cart->base_price}}</td>
                    <td>{{  $cart->discount_price}}</td>
                    <td>{{ $cart->quantity}}</td>
                    <td>{{ $cart->total_price}}</td>
                </tr>
            @endforeach


            </tbody>
        </table>
        <a style="float: right;" class="btn btn-info" href="">Checkout</a>
    </div>
    <br><br><br><br><br><br>
@endsection
