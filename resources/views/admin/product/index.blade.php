@extends('admin.master')
@section('admin.content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="color:rgb(0, 138, 202);font-size:25px; text-align:center;">All Products</h4>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Discount Price</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Black Friday</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                @php
                                    $product['image'] = explode('|', $product->image);
                                @endphp
                                <tr>
                                    <td class="py-1">
                                        {{ $product->id }}
                                    </td>
                                    <td>
                                        {{ $product->name }}
                                    </td>


                                    <td> {{ $product->price }}</td>
                                    <td> {{ $product->discount_price }}</td>
                                    <td>
                                        @foreach ($product->image as $images)
                                            <img src="{{ asset('/image/' . $images) }}" style="width: 80px;height:80px ;">
                                        @endforeach
                                    </td>
                                    <td class="center">

                                        @if ($product->status == 1)
                                            <strong class="badge badge-success">Active</strong>
                                        @else
                                            <strong class="badge badge-danger">InActive</strong>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($product->hot_deal == 1)
                                            <strong class="badge badge-success">Active</strong>
                                        @else
                                            <strong class="badge badge-danger">InActive</strong>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="p-2">
                                                <a href="{{ url('/edit-product/' . $product->id) }}"
                                                    class=" btn btn-info btn-sm"> <i class="las la-edit"></i>Edit</a>
                                            </div>
                                            <div class="p-2">
                                                <form action="{{ url('/delete-product/' . $product->id) }}" method="post">
                                                    @csrf
                                                    <button class=" btn btn-danger btn-sm"> <i class="las la-trash-alt"
                                                            style="color:rgb(243, 243, 243);"></i>Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach


                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
