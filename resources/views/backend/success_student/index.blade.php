
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
                <h4 class="text-center p-2"><strong>All  Success Student lists</strong></h4>
              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                <table class="table table-bordered border-primary" id="example">
                  <thead>
                    <tr>
                      <th scope="col">Serial No</th>
                      <th scope="col">Studnet Name</th>
                      <th scope="col">Student Title</th>
                      <th scope="col">Student Duration</th>
                      <th scope="col">Image</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @if ($successStudents->count() > 0)
                        @foreach ($successStudents as $successStudent )
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$successStudent->student_name}}</td>
                            <td>{{$successStudent->student_title}}</td>
                            <td>{{$successStudent->student_story}}</td>
                            <td>
                                @if ($successStudent->student_image)
                                <img src="{{asset('uploads/student_success')}}/{{$successStudent->student_image}}" alt="" class="rounded" style="width: 100px; height:100px">
                                @else
                                <img src="{{asset('uploads/student_success/default.png')}}" alt="" class="h-50 w-50">
                                @endif
                            </td>
                         <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                <button type="button" class="btn btn-danger">DELETE</button>
                                <button type="button" class="btn btn-info">UPDATE</button>
                                <button type="button" class="btn btn-warning"><a class="text-white" href="{{route('student.view', $successStudent->id)}}">View</a></button>
                              </div>
                         </td>

                        </tr>

                        @endforeach

                        @else
                        <tr>
                            <td colspan="6" align="center">Not Uploaded yet</td>
                        </tr>
                        @endif
                  </tbody>
                  {{-- <tbody>

                    @if ($successStudents->count() > 0)
                        @foreach ($successStudents as $successStudent )
                        <tr>

                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$course->course_title}}</td>
                            <td>{{$course->course_price}}</td>
                            <td>{{$course->course_duration}} Months</td>
                            <td align="center">
                                @if ($course->course_image)
                                <img src="{{asset('uploads/course')}}/{{$course->course_image}}" alt="" class="rounded" style="width: 100px; height:100px">
                                @else
                                <img src="{{asset('uploads/course/default.png')}}" alt="" class="h-50 w-50">
                                @endif


                            <td>
                              <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                <button type="button" class="btn btn-danger">DELETE</button>
                                <button type="button" class="btn btn-info">UPDATE</button>
                                <button type="button" class="btn btn-warning"><a class="text-white" href="{{route('course.view', $course->id)}}">View</a></button>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                    @else

                    @endif


                  </tbody> --}}
                </table>
              </div>
            </div>
          </div>
        </div>
        <!--/ Total Revenue -->

      </div>

    </div>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <!-- / Content -->


@endsection
