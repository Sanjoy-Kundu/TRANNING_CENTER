@extends('layouts.dashboard_master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">



    <!-- Total Revenue -->
    <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4 mx-auto">
      <div class="card">
        <div class="row row-bordered g-0">
            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <h4 class="text-center p-2"><strong>Edit Your Courses</strong></h4>
          <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
            {{$editItem}}
                <form action="{{url('course/update')}}/{{$editItem->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Course Title</b></label>
                        <input type="text" class="form-control" name="course_title" value="{{$editItem->course_title}}">
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Course Instructor</b></label>
                        <select class="form-select" name="instructor_id">
                            <option value="{{$editItem->instructor_id}}">{{$editItem->relationWithTrainers->trainer_name}}</option>
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
                            <option value="{{$editItem->category_id}}">{{$editItem->relationWithCategory->category_name}}</option>
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
                        <input type="number" class="form-control" name="course_price" value="{{$editItem->course_price}}">

                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Course Duration</b></label>
                        <input type="number" class="form-control" name="course_duration" value="{{$editItem->course_duration}}">

                    </div>


                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Discount</b></label>
                        <input type="number" class="form-control" name="discount" value="{{$editItem->discount}}">
                      </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Discounted Price</b></label>
                        <input type="number" class="form-control" name="discounted_price" value="{{$editItem->discounted_price}}">
                      </div>





                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><b class="fs-5">Course Description</b></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="course_description">{{$editItem->course_description}}</textarea>

                      </div>


                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Total Seats</b></label>
                        <input type="number" class="form-control" name="total_seats" value="{{$editItem->total_seats}}">

                      </div>


                      <img src="{{asset('uploads/course')}}/{{$editItem->course_image}}" alt="">
                      <div class="mb-3">
                        <label for="formFile" class="form-label"><b class="fs-5">Course Image</b></label>
                        <input class="form-control" type="file" id="formFile" name="course_image">
                      </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label"></label>
                        <button type="submit"  class="btn  btn-success" style="background-color: rgb(68, 77, 204);">Upload Course</button>
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
