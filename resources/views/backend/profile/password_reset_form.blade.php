@extends('layouts.dashboard_master')

@section('content')
     <!-- Content wrapper -->
     <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h2 class="text-center">Wellcome To Your Profile</h2>

                <div class="row gap-5 mx-auto">
                  <div class="col border-zinc-100">
                    <div class="card">
                        <div class="card-header text-center"><h2>Update Your Password</h2></div>
                        <div class="card-body">
                            <form action="" method="">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Your Email</label>
                                    <input type="email" class="form-control" id="" placeholder="Example input Email" name="your_email">
                                  </div>
                                  <div class="mb-3">
                                    <label for="" class="form-label">Your Password</label>
                                    <input type="password" name="your_password" class="form-control" id="" placeholder="Enter Your Password">
                                  </div>
                                  <div class="mb-3">
                                    <label for="" class="form-label">Your Confirm Password</label>
                                    <input type="password" name="your_confirm_password" class="form-control" id="" placeholder="Enter Your Password">
                                  </div>
                                  <button type="submit" class="btn btn-primary">Change Password</button>
                            </form>
                        </div>
                      </div>
                    </div>
                  <div class="col">
                    <div class="card">
                        <div class="card-header text-center"><h2>Update Your Profile</h2></div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label">Your Image</label>
                                <input type="file" name="your_image" class="form-control" id="">
                              </div>
                        </div>
                      </div>
                    </div>
                </div>



            <!-- Total Revenue -->
            {{-- <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4 mx-auto">
              <div class="card">
                @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="row row-bordered g-0">
                    <h4 class="text-center p-2"><strong>Upload Your Category</strong></h4>
                  <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                        <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Category Name</b></label>
                                <input type="text" class="form-control" name="category_name" placeholder="Enter Your Title">
                                @error('category_name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>

                              <div class="mb-3">
                                <label for="formFile" class="form-label"><b class="fs-5">Category Image</b></label>
                                <input class="form-control" type="file"  name="category_image">
                                @error('category_image')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <button  class="btn  btn-success" style="background-color: rgb(68, 77, 204);">Upload Partner</button>
                              </div>

                        </form>
                  </div>
                </div>
              </div>
            </div> --}}
            <!--/ Total Revenue -->
          </div>
        </div>
        <!-- / Content -->

@endsection

