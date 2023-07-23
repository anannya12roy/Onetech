@extends('admin.master')
@section('admin.content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">Welcome Admin</h3>
              <h6 class="font-weight-normal mb-0"><span class="text-primary"></span></h6>
            </div>
            <div class="col-12 col-xl-4">
             <div class="justify-content-end d-flex">
              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                <button class="btn btn-sm btn-light bg-white " type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                 <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                </button>

              </div>
             </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <div class="col-md-12 grid-margin transparent">
          <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent" style="text-align: center">
              <div class="card card-tale">
                <div class="card-body">
                  <p class="mb-4">Number of Categories</p>
                  <p class="fs-30 mb-2">{{ $totalcategory }}</p>
                  <p>10.00% (30 days)</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent" style="text-align: center">>
              <div class="card card-dark-blue">
                <div class="card-body">
                  <p class="mb-4">Number of Colors</p>
                  <p class="fs-30 mb-2">{{ $totalcolor }}</p>
                  <p>22.00% (30 days)</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent" style="text-align: center">>
              <div class="card card-light-blue">
                <div class="card-body">
                  <p class="mb-4">Number of Users</p>
                  <p class="fs-30 mb-2">{{ $totalusers }}</p>
                  <p>2.00% (30 days)</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 stretch-card transparent" style="text-align: center">>
              <div class="card card-light-danger">
                <div class="card-body">
                  <p class="mb-4">Number of Products</p>
                  <p class="fs-30 mb-2">{{ $totalproducts }}</p>
                  <p>0.22% (30 days)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('admin.footer')
    <!-- partial -->
  </div>
@endsection
