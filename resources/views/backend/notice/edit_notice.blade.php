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
                {{-- {{$single_notice}} --}}
                <div class="row row-bordered g-0">
                    <h4 class="text-center p-2"><strong>Update Your  Notice</strong></h4>
                  <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                        <form action="{{url('notice/update',$single_notice->id)}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label"><b class="fs-5">Notice Name</b></label>
                                <input type="text" class="form-control" name="notice_name" value="{{$single_notice->notice_name}}">
                                @error('notice_name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>

                              <div class="mb-3">
                                <label for="" class="form-label"><b class="fs-5">Notice Description</b></label>
                                <textarea class="form-control" id="" name="notice_description" rows="5">{{$single_notice->notice_description}}</textarea>
                                @error('notice_description')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <button type="submit"  class="btn  btn-success" style="background-color: rgb(68, 77, 204);">Upload Notice</button>
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

