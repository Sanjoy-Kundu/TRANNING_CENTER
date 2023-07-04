
@extends('layouts.dashboard_master')

@section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Total Revenue -->
        <div class="col-12 col-lg-9 order-2 order-md-3 order-lg-2 mb-4 mx-auto">
          <div class="card">
            <div class="row row-bordered g-0">
                <h4 class="text-center p-2"><strong>Course Details</strong></h4>
              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">


                <table class="table table-bordered">
                  <thead>


                    <tr>
                      <th scope="col">Course Name</th>
                      <td>{{$singleInfo->course_title}}</td>
                    </tr>
                    <tr>
                      <th scope="col">Course Duration</th>
                      <td>{{$singleInfo->course_duration}} Months</td>
                    </tr>
                    <tr>
                      <th scope="col">Course Price</th>
                      <td>{{$singleInfo->course_price}} Taka</td>
                    </tr>
                    <tr>
                      <th scope="col">Course Discount</th>
                      <td>{{$singleInfo->discount}}%</td>
                    </tr>
                    <tr>
                      <th scope="col">Course Discount Price</th>
                      <td>{{$singleInfo->discounted_price}} Taka</td>
                    </tr>

                    <tr>
                      <th scope="col">Course Description</th>
                      <td>{{$singleInfo->course_description}} Taka</td>
                    </tr>
                    <tr>
                      <th scope="col">Course Image</th>
                      <td>
                     @if ($singleInfo->course_image)
                     <img src="{{asset('uploads/course')}}/{{$singleInfo->course_image}} " alt="" class="h-50 w-50">
                     @else
                     <img src="{{asset('uploads/course/default.png')}}" alt="" class="h-50 w-50">
                     @endif
                    </td>
                    <tr>
                        <th scope="col">Course Creation Date</th>
                        <td>{{$singleInfo->created_at->format('d-M-Y')}}</td>
                      </tr>
                    <tr>
                        <th scope="col">Course Update Date</th>
                        <td>
                            @if ($singleInfo->updated_at)
                            {{$singleInfo->updated_at->format('d-M-Y')}}
                            @else
                                Not Updated yet
                            @endif
                        </td>
                      </tr>
                    </tr>
                    <tr>
                        <th>Course Instructor Name</th>
                        <td>{{$singleInfo->relationWithTrainers->trainer_name}}</td>
                    </tr>
                    <tr>
                        <td>Instructor Image</td>
                        <td>
                            @if ($singleInfo->relationWithTrainers->trainer_image)
                            <img src="{{asset('uploads/trainers')}}/{{$singleInfo->relationWithTrainers->trainer_image}}" alt="">
                            @else
                            <img src="{{asset('uploads/trainers/default.jpg')}}" alt="" class="">
                            @endif

                        </td>
                    </tr>
                    <tr>
                        <th>Previous Page</th>
                        <td><a href="{{route('course.list')}}">Back</a></td>
                    </tr>



                </table>
              </div>
            </div>
          </div>
        </div>
        <!--/ Total Revenue -->

      </div>

    </div>

    <!-- / Content -->


@endsection
