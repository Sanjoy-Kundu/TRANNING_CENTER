@extends('layouts.profile_dashboard_master')
@section('content')
     <!-- Content wrapper -->
     <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h2 class="text-center">Wellcome To <b>{{Auth::user()->name}}'s</b> Profile</h2>



            <div class="row gy-5 mx-auto">
                <div class="col-sm-12 col-md-6 col-xl-6    border-zinc-100">
                     <div class="card">
                            @if (session('success'))
                                <div class="alert alert-success">{{session('success')}}</div>
                            @endif
                            <div class="card-header text-center"><h2>Update Your Password</h2></div>
                                <div class="card-body">
                                    <form action="{{route('dashboard.my.profile.password.change')}}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                        <label for="" class="form-label">Your Current Password</label>
                                        <input type="password" class="form-control" id="" placeholder="Enter Your Password" name="your_current_password">
                                        @error('your_current_password')
                                                <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>

                                        <div class="mb-3">
                                        <label for="" class="form-label">Your New Password</label>
                                        <input type="password" name="password" class="form-control" id="" placeholder="Enter Your New Password">
                                        @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>

                                        <div class="mb-3">
                                        <label for="" class="form-label">Your Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" id="" placeholder="Enter Your Confirm  Password">
                                        @error('password_confirmation')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                            <div class="col-sm-12 col-md-6 col-xl-6">
                                <div class="card">
                                    <div class="card-header text-center"><h2>Update Your Profile</h2></div>
                                        <div class="card-body">
                                            <form action="">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Your Image</label>
                                                    <input type="file" name="your_image" class="form-control" id="">
                                                    </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Your Name</label>
                                                    <input type="text" name="your_name" class="form-control" id="" value="">
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Upload</button>
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
