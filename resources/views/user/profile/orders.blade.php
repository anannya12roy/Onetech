@extends('user.master')

@section('user.content')

<div class="container">

<h4 style="margin-top: 10px;">{{Auth::user()->name}} Your orders  </h4>

<table class="table table-striped" style="margin-top: 10px;">
  <thead>
    <tr>

      <th scope="col">Order id</th>
      <th scope="col">Product name</th>
      <th scope="col">Size</th>
      <th scope="col">Color</th>
      <th scope="col">Qty</th>
      <th scope="col">Total Price</th>
      <th scope="col">Delivery Status</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
      @foreach ($orderlists  as $orderlist)
      @php
      $orderlist['image'] = explode('|',$orderlist->image);
      $images = $orderlist->image[0];
      @endphp

    <tr>
      <th scope="row">{{$orderlist->id}}</th>
      <td>{{$orderlist->product_name}}</td>
      <td>{{$orderlist->size}}</td>
      <td>{{$orderlist->color}}</td>
      <td>{{$orderlist->qty}}</td>
      <td>{{$orderlist->total_price}}</td>
      {{-- <td>{{$orderlist->delivery_status}}</td> --}}
      <td>
          @if($orderlist->delivery_status == 'Synced')
          <h5>Order Confirm</h5>
          @elseif($orderlist->delivery_status == 'Cancel by user')
          <h5>Order Cancel</h5>
          @else
          {{$orderlist->delivery_status}}
          @endif
      </td>
      <td>
          <img src="{{asset('/image/'.$images)}}" style="width:100px; height:100px;">
      </td>
      <td>
          @if($orderlist->delivery_status == 'processing')
          <a href="{{url('/order-cancel/'.$orderlist->id)}}" onclick=" confirmation(event)" class="btn btn-danger">Cancel Order</a>
          @else
          <h5></h5>
          @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
