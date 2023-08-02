
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
                <h4 class="text-center p-2"><strong>Notice  Details</strong></h4>
              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">


                <table class="table table-bordered">
                  <thead>


                    <tr>
                      <th scope="col">Notice Name</th>
                      <td>{{$singleNotice->notice_name}}</td>
                    </tr>

                    <tr>
                      <th scope="col">Notice Description</th>
                      <td>{{$singleNotice->notice_description}}</td>
                    </tr>
                        <th scope="col">Notice Creation Date</th>
                        <td>{{$singleNotice->created_at->format('d-M-Y')}}</td>
                      </tr>
                    <tr>
                        <th scope="col">Notice Update Date</th>
                        <td>
                            @if ($singleNotice->updated_at)
                            {{$singleNotice->updated_at->format('d-M-Y')}}
                            @else
                                Not Updated yet
                            @endif
                        </td>
                      </tr>
                    </tr>
                    <tr>
                        <th scope="col">Notice Staus</th>
                        <td>{{$singleNotice->status}}</td>
                      </tr>

                    <tr>
                        <th>Previous Page</th>
                        <td><a href="{{route('notice.all')}}">Back</a></td>
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
