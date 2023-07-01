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
                <h4 class="text-center p-2"><strong>Upload Your Successfull Student Story</strong></h4>
              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                    <form action="{{route('success.student.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Student Name</b></label>
                            <input type="text" class="form-control" name="student_name" placeholder="Enter Your Name">
                            @error('student_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Student Title</b></label>
                            <input type="text" class="form-control" name="student_title" placeholder="Enter Your title">
                            @error('student_title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"><b class="fs-5">Student Story</b></label>
                            <textarea class="form-control" rows="3" name="student_story"></textarea>
                            @error('student_story')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="formFile" class="form-label"><b class="fs-5">Upload Image</b></label>
                            <input class="form-control" type="file" id="formFile" name="student_image">
                            @error('student_image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="formFile" class="form-label"></label>
                            <button type="submit" class="btn  btn-success" style="background-color: rgb(68, 77, 204);">Upload Student</button>
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

