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
                    {{-- {{$pendingCourse}} --}}
                    <h4 class="text-center p-2"><strong>Pending Your Course</strong></h4>
                  <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                    @if ($pendingCourse->status == 'approve')
                    <h4>Your Course Status is <span class="badge bg-success">{{$pendingCourse->status}}</span>
                    @else
                    <h4>Your Course Status is <span class="badge bg-danger">{{$pendingCourse->status}}</span>
                    @endif

                    </h4>
                        <form action="{{route('course.approve.pending.store', $pendingCourse->id)}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="formFile" class="form-label"><b class="fs-5">Course Name</b></label>
                                <input class="form-control" type="text"  name="" value="{{$pendingCourse->course_title}}">
                              </div>


                              <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label"><b class="fs-5">Reject Post</b></label>
                                <select class="form-select" name="status">
                                    @if ($pendingCourse->status)
                                    <option value="{{$pendingCourse->status}}" selected>Approve</option>
                                    @endif
                                        <option value="pending">Pending</option>
                                     </select>
                              </div>


                              <div class="mb-3">
                                <button type="submit" class="btn  btn-success" style="background-color: rgb(68, 77, 204);">Approve Course</button>
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

