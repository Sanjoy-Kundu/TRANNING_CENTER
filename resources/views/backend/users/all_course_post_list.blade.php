
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
                @if ($total_courses_posts->count() >0)
                <h4 class="text-center p-2"><strong>All Pending Course lists ({{$total_courses_posts->count()}})</strong></h4>
                @else
                <h4 class="text-center p-2"><strong>All Pending Course lists(0)</strong></h4>
                @endif

              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                    @if (Session('message'))
                        <div class="alert alert-success">Course Deleted Successfully</div>
                    @endif

                    @if ($total_courses_posts->count() >0)
                    <table class="table table-border" id="myTable" style="width:100%">
                        <thead>
                          <tr>
                            {{-- <th scope="col">DELETE</th> --}}
                            <th scope="col">Serial No</th>
                            <th scope="col">Status</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Course Category</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if ($total_courses_posts->count() > 0)
                              @foreach ($total_courses_posts as $course )
                              <tr>
                                  {{-- <td>
                                      <form action="">
                                          <input type="checkbox" name="" id="">delete
                                      </form>
                                  </td> --}}
                                  <td scope="row">{{$loop->index+1}}</td>
                                  @if ($course->status == 'pending')
                                  {{-- <td>{{$course->status}}</td> --}}
                                  <td>  <span class="badge bg-warning">{{$course->status}}</span></td>

                                  @else

                                  @endif

                                  <td>{{$course->course_title}}</td>
                                  <td>{{$course->relationWithCategory->category_name}}</td>
                                  <td align="center">
                                      @if ($course->course_image)
                                      <img src="{{asset('uploads/course')}}/{{$course->course_image}}" alt="" class="rounded" style="width: 100px; height:100px">
                                      @else
                                      <img src="{{asset('uploads/course/default.png')}}" alt="" class="h-50 w-50">
                                      @endif


                                      <td>
                                        No
                                          {{-- <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                              <button type="button" class="btn btn-danger"><a href="{{route('course.pending.reject.form', $course->id)}}" class="text-white">Reject</a></button>
                                              <button type="button" class="btn btn-info"><a href="{{route('course.approve.form', $course->id)}}" class="text-white">Approve</a></button>
                                              <button type="button" class="btn btn-warning"><a class="text-white" href="{{route('course.pending.post.view', $course->id)}}">View</a></button>
                                            </div> --}}
                                        </td>
                                </tr>
                              @endforeach
                          @else
                                <tr>
                                  <td colspan="8" align="center">No Pending Uploaded Yet</td>
                                </tr>
                          @endif
                        </tbody>
                      </table>
                    @else
                      <table class="table table-border">
                        <tr>
                            <td align="center" class="text-danger">No Panding Post Uploaded Yet</td>
                        </tr>
                      </table>
                    @endif

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
        });

        $(document).ready(function(){
            new DataTable('#retore_course');
        })



    </script>



    {{-- @if (Session::has('message'))
    <script>
        toastr.success("{{Session::get('message')}}");
    </script>

    @endif
    <!-- / Content --> --}}


@endsection
