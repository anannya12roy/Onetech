@extends('admin.master')
@section('admin.content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Striped Table</h4>
        <p class="card-description">
          Add class <code>.table-striped</code>
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  ID
                </th>
                <th>
                    Name
                </th>
                <th>
                  Image
                </th>
                <th>
                  Desription
                </th>
                <th>
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
              <tr>
                <td class="py-1">
                    {{$category->id}}
                </td>
                <td>
                    {{$category->name}}
                </td>
                <td>
                    {{$category->description}}
                </td>
                <td>
                    <div class="d-flex">
                        <div class="p-2">
                            <a href="{{url('/edit-category/'.$category->id)}}" class=" btn btn-info btn-sm">  <i class="las la-edit"></i>Edit</a>
                        </div>
                        <div class="p-2">
                            <form action="{{url('/delete-category/'.$category->id)}}" method="post">
                                @csrf
                                <button class=" btn btn-danger btn-sm">  <i class="las la-trash-alt" style="color:rgb(243, 243, 243);"></i>Delete</button>
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
