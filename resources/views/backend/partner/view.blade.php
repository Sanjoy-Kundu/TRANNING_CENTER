
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
                <h4 class="text-center p-2"><strong>Partner Details</strong></h4>
              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">

                <table class="table table-bordered">
               <thead>


                    <tr>
                      <th scope="col"><h4>Parner Name</h4></th>
                      <td><h4>{{$partnerView->partner_name}}</h4></td>
                    </tr>
                    <tr>
                      <th scope="col"><h4>Partner Logo</h4></th>
                      <td>
                     @if ($partnerView->partner_image)
                     <img src="{{asset('uploads/partners')}}/{{$partnerView->partner_image}} " alt="" class="h-50 w-50">
                     @else
                     <img src="{{asset('uploads/partners/default.png')}}" alt="" class="h-50 w-50">
                     @endif
                    </td>
                    <tr>
                        <th scope="col"><h4>PartnerShip Date</h4></th>
                        <td><h4>{{$partnerView->created_at->format('d-M-Y')}}</h4></td>
                      </tr>
                    <tr>
                        <th scope="col"><h4>PartnerShip Update Date</h4></th>
                        <td>
                            <h4> @if ($partnerView->updated_at)
                                {{$partnerView->updated_at->format('d-M-Y')}}
                                @else
                                    Not Updated yet
                                @endif</h4>
                        </td>
                      </tr>



                    <tr>
                        <th><h4>Previous Page</h4></th>
                        <td><h4><a href="{{route('partner.list')}}">Back</a></h4></td>
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
