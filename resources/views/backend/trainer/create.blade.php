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
                <h4 class="text-center p-2"><strong>Upload Your TRAINERS</strong></h4>
              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                    <form action="{{route('trainer.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Trainers Name</b></label>
                            <input type="text" class="form-control" name="trainer_name" placeholder="Enter Your Name">
                            @error('trainer_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Trainers Title</b></label>
                            <input type="text" class="form-control" name="trainer_title" placeholder="Enter Your title">
                            @error('trainer_title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"><b class="fs-5">Trainers Description</b></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="trainer_description"></textarea>
                            @error('trainer_description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Trainers Salary</b></label>
                            <input type="number" class="form-control" name="trainer_salary" placeholder="Enter Your title">
                            @error('trainer_salary')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="formFile" class="form-label"><b class="fs-5">Upload Image</b></label>
                            <input class="form-control" type="file" id="formFile" name="trainer_image">
                            @error('trainer_image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>


                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Facebook Link</b></label>
                            <input type="text" class="form-control" name="trainer_facebook_link" placeholder="https://facebook.demo">
                            @error('trainer_facebook_link')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>


                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Linkdin Link</b></label>
                            <input type="text" class="form-control" name="trainer_linkdin_link" placeholder="https://linkdin.demo">
                            @error('trainer_linkdin_link')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>




                          <div class="mb-3">
                            <label for="formFile" class="form-label"></label>
                            <button class="btn  btn-success" style="background-color: rgb(68, 77, 204);">Upload Trainers</button>
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

