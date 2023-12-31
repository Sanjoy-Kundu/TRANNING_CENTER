
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
                @if ($partners->count() > 0)
                <h4 class="text-center p-2"><strong>Our Partners List ({{$partners->count()}})</strong></h4>
                @else
                <h4 class="text-center p-2"><strong>Our Partners List(0)</strong></h4>
                @endif

              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                @if ($partners->count() > 0)
                <table class="table table-bordered" id="partner_list">
                    <thead>
                      <tr>
                        <th scope="col">Serial No</th>
                        <th scope="col">Partner Name</th>
                        <th scope="col">Partner Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                          @if ($partners->count() > 0)
                          @foreach ($partners as $partner)
                          <tr>
                              <th scope="row">{{$loop->index+1}}</th>
                              <td>{{$partner->partner_name}}</td>
                              <td>
                                  @if ($partner->partner_image)
                                  <img src="{{asset('uploads/partners')}}/{{$partner->partner_image}}" alt="" class="rounded" style="width: 100px; height:100px">
                                  @else
                                  <img src="{{asset('uploads/partners/default.png')}}" alt="" class="h-50 w-50">
                                  @endif
                              </td>
                           <td>
                              <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                  <button type="button" class="btn btn-danger">DELETE</button>
                                  <button type="button" class="btn btn-info">UPDATE</button>
                                  <button type="button" class="btn btn-warning"><a class="text-white" href="{{route('partner.view', $partner->id)}}">View</a></button>
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
                  </table>
                @else
                    <table class="table table-border">
                        <tr>
                            <td class="text-center text-danger">No Partner Uploaded Yet</td>
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
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <!-- / Content -->


@endsection
