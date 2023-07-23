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
            <th scope="col">Base price</th>
            <th scope="col">Total price</th>
          </tr>
        </thead>
        <tbody>


          <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>


          </tr>


        </tbody>
    </table>
</div>
@endsection
