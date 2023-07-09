@extends('layouts.dashboard_master')

@section('content')
     <!-- Content wrapper -->
     <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Total Revenue -->
            <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4 mx-auto">
              <div class="card">
                @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="row row-bordered g-0">
                    <h4 class="text-center p-2"><strong>ADD Your Vendor Or Admin</strong></h4>
                  <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                        <form action="{{route('user.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label"><b class="fs-5">User Name</b></label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Your Title">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label"><b class="fs-5">User Email</b></label>
                                <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>

                              <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label"><b class="fs-5">user Role</b></label>
                                <select class="form-select" name="role">
                                    <option value="" selected>Select Your Category</option>
                                    <option value="admin">Admin</option>
                                    <option value="vendor">Vendor</option>
                                     </select>
                                     @error('role')
                                     <span class="text-danger">{{$message}}</span>
                                 @enderror
                              </div>


                              <div class="mb-3">
                                <button  class="btn  btn-success" style="background-color: rgb(68, 77, 204);">ADD</button>
                              </div>

                        </form>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Total Revenue -->
          </div>
        </div>
        <!-- / Content -->

@endsection

