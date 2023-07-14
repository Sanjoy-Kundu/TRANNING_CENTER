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
                    <h4 class="text-center p-2"><strong>Upload Your Category</strong></h4>
                  <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Category Name</b></label>
                                <input type="text" class="form-control" name="category_name" value="{{$singleCategory->category_name}}">
                              </div>


                            <div class="mb-3">
                                <label for="" class="">Previous Category Image</label>
                                @if ($singleCategory->category_image)
                                <img src="{{asset('uploads/category')}}/{{$singleCategory->category_image}}" alt="" style="height: 200px; width:200px">
                                @else
                                <img src="{{asset('uploads/category/default_category.jpg')}}" alt="" style="height: 200px; width:200px">
                                @endif

                            </div>
                              <div class="mb-3">
                                <label for="formFile" class="form-label"><b class="fs-5">Update Category Image</b></label>
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
            </div>
            <!--/ Total Revenue -->
          </div>
        </div>
        <!-- / Content -->

@endsection

