

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
                @if ($all_admin_pendingNotice_lists->count() > 0)
                <h4 class="text-center p-2"><strong>Total Pending  Notice ({{$all_admin_pendingNotice_lists->count()}})</strong></h4>
                @else
                <h4 class="text-center p-2"><strong>All Pending Notice  lists</strong></h4>
                @endif

              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                    @if ($all_admin_pendingNotice_lists->count() > 0)
                    <table id="notice_table" class="display" style="width:100%">
                        <thead>
                          <tr>
                            <th scope="">Serial No</th>
                            <th scope="" align="center">Notice Name</th>
                            <th scope="col" align="center">Person Name</th>
                            <th scope="col" align="center">Notice Description</th>
                            <th scope="col" align="center">Approve Status</th>
                            <th scope="col" align="center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if ($all_admin_pendingNotice_lists->count() > 0)
                              @foreach ($all_admin_pendingNotice_lists as $notice )
                              <tr>
                                  <th scope="row">{{$loop->index+1}}</th>
                                  <td>{{$notice->notice_name}}</td>
                                    <td>{{$notice->relationWithUser->name}}</td>
                                    <td>{{ Str::limit($notice->notice_description, 50) }}</td>
                                    <td>{{$notice->status}}</td>
                                  <td>

                                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                        <button type="button" class="btn btn-warning"><a class="text-white" href="">View</a></button>
                                      </div>
                                  </td>
                                </tr>
                              @endforeach
                          @else
                                <tr>
                                  <td colspan="8" align="center">No Notice Uploaded Yet</td>
                                </tr>
                          @endif
                        </tbody>
                 </table>
                    @else
                        <table class="table table-border">
                            <tr>
                                <td align="center" class="text-danger">No Notices Uploaded Yet</td>
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





	</script>




@endsection
