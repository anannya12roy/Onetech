@extends('user.master')

@section('user.content')
    
<div class="container">
    <div class="col-md-3"></div>
    <div style="margin:auto;justify-content: center; margin-top:50px; margin-bottom:50px;" class="col-md-6   order-details">
        <div class="section-title text-center">
            <h3 class="title">Your Order</h3>
        </div>
        <div class="order-summary">
            <div class="order-col">
                <div><strong>PRODUCT</strong></div>
                <div><strong>TOTAL</strong></div>
            </div>
            <?php
            $total_cart_price = 0;
           $totalitem = 0;
           ?>
           @foreach ($carts as $cart)
           <?php

            $total_cart_price = $total_cart_price + $cart->total_price;
            ?>
            <div class="order-products">
                <div class="order-col">
                    <div>Qty {{$cart->quantity}} x {{$cart->product_name}} ({{$cart->color}} - {{$cart->size}} )</div>
                    <div>&#2547;{{$cart->total_price}}</div>
                </div>

            </div>
            @endforeach
            <div class="order-col">
                <div>Shipping</div>
                <div><strong>FREE</strong></div>
            </div>
            <div class="order-col">
                <div><strong>TOTAL</strong></div>
                <div><strong class="order-total">&#2547;{{ $total_cart_price }}</strong></div>
            </div>
        </div>
        <div class="payment-method">
            <div class="input-radio">
                <input type="radio" name="payment" id="payment-1">
                <label for="payment-1">
                    <span></span>
                    Cash On Delivery
                </label>
            </div>


        </div>
        <div class="input-checkbox">
            <input type="checkbox" id="terms">
            <label for="terms">
                <span></span>
                I've read and accept the <a href="#">terms & conditions</a>
            </label>
        </div>
        <a  href="{{url('/cod-order')}}" class="btn btn-primary primary-btn order-submit">Place order</a>
    </div>

</div>
<div class="col-md-3"></div>

@endsection
<style>
    .billing-details {
margin-bottom: 30px;
}

.shiping-details {
margin-bottom: 30px;
}

.order-details {
position: relative;
padding: 0px 30px 30px;
border-right: 1px solid #E4E7ED;
border-left: 1px solid #E4E7ED;
border-bottom: 1px solid #E4E7ED;
}

.order-details:before {
content: "";
position: absolute;
left: -1px;
right: -1px;
top: -15px;
height: 30px;
border-top: 1px solid #E4E7ED;
border-left: 1px solid #E4E7ED;
border-right: 1px solid #E4E7ED;
}

.order-summary {
margin: 15px 0px;
}

.order-summary .order-col {
display: table;
width: 100%;
}

.order-summary .order-col:after {
content: "";
display: block;
clear: both;
}

.order-summary .order-col>div {
display: table-cell;
padding: 10px 0px;
}

.order-summary .order-col>div:first-child {
width: calc(100% - 150px);
}

.order-summary .order-col>div:last-child {
width: 150px;
text-align: right;
}

.order-summary .order-col .order-total {
font-size: 24px;
color: #D10024;
}

.order-details .payment-method {
margin: 30px 0px;
}

.order-details .order-submit {
display: block;
margin-top: 30px;
}

</style>