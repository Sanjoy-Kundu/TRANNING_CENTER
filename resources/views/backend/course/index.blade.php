
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
                <h4 class="text-center p-2"><strong>All Course lists</strong></h4>
              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                    @if (Session('message'))
                        <div class="alert alert-success">Course Deleted Successfully</div>
                    @endif
                <table class="table table-striped" id="myTable" style="width:100%">
                  <thead>
                    <tr>
                      <th scope="col">DELETE</th>
                      <th scope="col">Serial No</th>
                      <th scope="col">Course Name</th>
                      <th scope="col">Course Category</th>
                      <th scope="col">Course Price</th>
                      <th scope="col">Course Seats</th>
                      <th scope="col">Course Duration</th>
                      <th scope="col">Image</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($courses->count() > 0)
                        @foreach ($courses as $course )
                        <tr>
                            <td>
                                <form action="">
                                    <input type="checkbox" name="" id="">delete
                                </form>
                            </td>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$course->course_title}}</td>
                            <td>{{$course->relationWithCategory->category_name}}</td>
                            <td>{{$course->course_price}} BDT</td>
                            <td>{{$course->total_seats}}</td>
                            <td>{{$course->course_duration}} Months</td>
                            <td align="center">
                                @if ($course->course_image)
                                <img src="{{asset('uploads/course')}}/{{$course->course_image}}" alt="" class="rounded" style="width: 100px; height:100px">
                                @else
                                <img src="{{asset('uploads/course/default.png')}}" alt="" class="h-50 w-50">
                                @endif


                            <td>
                              <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                <button type="button" class="btn btn-danger"><a href="{{route('course.delete', $course->id)}}" class="text-white">DELETE</a></button>
                                <button type="button" class="btn btn-info"><a href="{{route('course.edit', $course->id)}}" class="text-white">EDIT</a></button>
                                <button type="button" class="btn btn-warning"><a class="text-white" href="{{route('course.view', $course->id)}}">View</a></button>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                    @else
                          <tr>
                            <td colspan="8" align="center">No Course Uploaded Yet</td>
                          </tr>
                    @endif
                  </tbody>
                </table>
                <button class="btn btn-info">All Deleted Data List</button>
              </div>
            </div>
          </div>
        </div>
        <!--/ Total Revenue -->
      </div>

    </div>

    <script>
        $(document).ready(function(){
            new DataTable('#myTable');
        })
    </script>



    {{-- @if (Session::has('message'))
    <script>
        toastr.success("{{Session::get('message')}}");
    </script>

    @endif
    <!-- / Content --> --}}


@endsection
