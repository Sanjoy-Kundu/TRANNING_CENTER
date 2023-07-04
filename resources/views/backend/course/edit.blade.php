@extends('layouts.dashboard_master')
@section('content')
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">



      <!-- Total Revenue -->
      <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4 mx-auto">
        <div class="card">
          <div class="row row-bordered g-0">
              @if (session('success'))
                  <div class="alert alert-success">{{session('success')}}</div>
              @endif
              <h4 class="text-center p-2"><strong>Edit Your Courses</strong></h4>

              {{$editItem}}
            <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                  <form action="" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Course Title</b></label>
                          <input type="text" class="form-control" name="course_title" placeholder="Enter Your Title" value="{{$editItem->course_title}}">
                          @error('course_title')
                              <span class="text-danger"><b>{{$message}}</b></span>
                          @enderror
                        </div>

                        <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Course Instructor</b></label>
                          <select class="form-select" name="instructor_id">
                            <option selected value="{{$editItem->instructor_id}}">{{$editItem->relationWithTrainers->trainer_name}}</option>
                              @if (count($Instructors) > 0 )
                              @foreach ($Instructors as  $Instructor)
                                  <option value="{{$Instructor->id}}">{{$Instructor->trainer_name}}({{$Instructor->trainer_title}})</option>
                              @endforeach
                              @else
                              <option value="">Please Upload Your Instructor</option>
                              @endif
                               </select>
                        </div>


                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Course Category</b></label>
                          <select class="form-select" name="category_id">
                            <option selected value="{{$editItem->category_id}}">{{$editItem->relationWithCategory->category_name}}</option>
                              @if (count($courseCategories) > 0 )
                              @foreach ($courseCategories as  $category)
                                  <option value="{{$category->id}}">{{$category->category_name}}</option>
                              @endforeach
                              @else
                              <option value="">Please Upload Your Category</option>
                              @endif
                               </select>
                        </div>


                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Course Price</b></label>
                          <input type="number" class="form-control" name="course_price" placeholder="Enter Your Price" value="{{$editItem->course_price}}">
                          @error('course_price')
                          <span class="text-danger"><b>{{$message}}</b></span>
                         @enderror
                      </div>

                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Course Duration</b></label>
                          <input type="number" class="form-control" name="course_duration" placeholder="Enter Your Price" value="{{$editItem->course_duration}}">
                          @error('course_duration')
                          <span class="text-danger"><b>{{$message}}</b></span>
                         @enderror
                      </div>


                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Discount</b></label>
                          <input type="number" class="form-control" name="discount" placeholder="Enter Your Discount" value="{{$editItem->discount}}">
                          @error('discount')
                          <span class="text-danger"><b>{{$message}}</b></span>
                         @enderror
                        </div>

                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label"><b class="fs-5">Course Description</b></label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="course_description">{{$editItem->course_description}}</textarea>
                          @error('course_description')
                          <span class="text-danger"><b>{{$message}}</b></span>
                         @enderror
                        </div>


                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Total Seats</b></label>
                          <input type="number" class="form-control" name="total_seats" placeholder="Enter Total Seats" value="{{$editItem->total_seats}}">
                          @error('total_seats')
                          <span class="text-danger"><b>{{$message}}</b></span>
                         @enderror
                        </div>


                        <div class="mb-3">
                          <label for="formFile" class="form-label"><b class="fs-5">Course Image</b></label>
                          <img src="{{asset('uploads/course')}}/{{$editItem->course_image}}" alt="">
                          <input class="form-control" type="file" id="formFile" name="course_image">
                          @error('course_image')
                          <span class="text-danger"><b>{{$message}}</b></span>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label for="formFile" class="form-label"></label>
                          <button class="btn  btn-success" style="background-color: rgb(68, 77, 204);">Update Course</button>
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


<script>
$('#summernote').summernote({
placeholder: 'Hello Bootstrap 5',
tabsize: 2,
height: 100
});
</script>


@endsection

