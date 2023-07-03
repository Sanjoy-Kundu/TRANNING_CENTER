
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
                <h4 class="text-center p-2"><strong>Successfull Student  Details</strong></h4>
              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                <table class="table table-bordered">
               <thead>
                    <tr>
                      <th scope="col"><h4>Student Name</h4></th>
                      <td><h4>{{$successStudentView->student_name}}</h4></td>
                    </tr>
                    <tr>
                      <th scope="col"><h4>Student Title</h4></th>
                      <td><h4>{{$successStudentView->student_title}} Months</h4></td>
                    </tr>
                    <tr>
                      <th scope="col"><h4>Student Description</h4></th>
                      <td><h4>{{$successStudentView->student_story}}</h4></td>
                    </tr>
                    <tr>
                      <th scope="col"><h4>Student Image</h4></th>
                      <td>
                            @if ($successStudentView->student_image)
                            <img src="{{asset('uploads/student_success')}}/{{$successStudentView->student_image}} " alt="" class="h-50 w-50">
                            @else
                            <img src="{{asset('uploads/student_image/default.png')}}" alt="" class="h-50 w-50">
                            @endif
                    </td>
                    <tr>
                        <th scope="col"><h4>Student Uploaded Date</h4></th>
                        <td><h4>{{$successStudentView->created_at->format('d-M-Y')}}</h4></td>
                      </tr>
                    <tr>
                            <th scope="col"><h4>Student Update Date</h4></th>
                            <td>
                                <h4> @if ($successStudentView->updated_at)
                                    {{$successStudentView->updated_at->format('d-M-Y')}}
                                    @else
                                        Not Updated yet
                                    @endif</h4>
                            </td>
                      </tr>
                    <tr>
                        <th><h4>Previous Page</h4></th>
                        <td><h4><a href="{{route('success.student.list')}}">Back</a></h4></td>
                    </tr>
                </thead>
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
