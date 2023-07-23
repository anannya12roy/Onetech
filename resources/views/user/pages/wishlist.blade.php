@extends('user.master')

@section('user.content')

<div class="container">

<h4 style="margin-top: 10px;">{{Auth::user()->name}} Your Wishlist Item  </h4>
    <table style="margin-top: 5%;" class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Discount price</th>
          </tr>
        </thead>
        <tbody>

@foreach ($wishlistData as $data)
          <tr>
            <th><a href="{{url('/delete_wishlist/'.$data->id)}}" onclick=" confirmation(event)" style="height:25%; margin-left: 15px;  border-style: none;"  class="delete"><i  class="fa fa-close"></i></a>
            </th>
            <th scope="row">{{ $data->product->name }}
             <br>
                Size: {{ $data->product->size }}<br>
                Color: {{ $data->product->color }}

            </th>
            <td><img name="image" style="height: auto; width: 70px"
                src="{{ asset('/image/' .  $data->product->image) }}"></td>
            <td>{{ $data->product->price }}</td>
            <td>{{ $data->product->discount_price }}</td>


          </tr>

          @endforeach
        </tbody>
    </table>
</div>
@endsection
