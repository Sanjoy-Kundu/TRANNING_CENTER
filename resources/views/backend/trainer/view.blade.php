
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
                <h4 class="text-center p-2"><strong>Trainers Details</strong></h4>
              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                <table class="table table-bordered">
               <thead>


                    <tr>
                      <th scope="col"><h4>Trainer Name</h4></th>
                      <td><h4>{{$singleTrainer->trainer_name}}</h4></td>
                    </tr>
                    <tr>
                      <th scope="col"><h4>Trainer Title</h4></th>
                      <td><h4>{{$singleTrainer->trainer_title}} Months</h4></td>
                    </tr>
                    <tr>
                      <th scope="col"><h4>Trainer Salary</h4></th>
                      <td><h4>{{$singleTrainer->trainer_salary}} Taka</h4></td>
                    </tr>



                    <tr>
                      <th scope="col"><h4>Trainer Image</h4></th>
                      <td>
                     @if ($singleTrainer->trainer_image)
                     <img src="{{asset('uploads/trainers')}}/{{$singleTrainer->trainer_image}} " alt="" class="h-50 w-50">
                     @else
                     <img src="{{asset('uploads/trainers/default.png')}}" alt="" class="h-50 w-50">
                     @endif
                    </td>
                    <tr>
                        <th scope="col"><h4>Trainer Joining Date</h4></th>
                        <td><h4>{{$singleTrainer->created_at->format('d-M-Y')}}</h4></td>
                      </tr>
                    <tr>
                        <th scope="col"><h4>Trainer Update Date</h4></th>
                        <td>
                            <h4> @if ($singleTrainer->updated_at)
                                {{$singleTrainer->updated_at->format('d-M-Y')}}
                                @else
                                    Not Updated yet
                                @endif</h4>
                        </td>
                      </tr>



                    <tr>
                        <th><h4>Previous Page</h4></th>
                        <td><h4><a href="{{route('trainer.list')}}">Back</a></h4></td>
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
