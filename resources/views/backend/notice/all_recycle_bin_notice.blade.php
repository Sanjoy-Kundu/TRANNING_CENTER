
@extends('layouts.dashboard_master')

@section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Total Revenue -->
        <div class="col-12 col-lg-9 order-2 order-md-3 order-lg-2 mb-4 mx-auto">
          <div class="card">
                @if (session('success'))
                    <div class="alert alert-danger">{{session('success')}}</div>
                @endif
            <div class="row row-bordered g-0">
                @if ($recycleBinLists->count() > 0)
                <h4 class="text-center p-2"><strong>Total Notice ({{$recycleBinLists->count()}})</strong></h4>
                @else
                <h4 class="text-center p-2"><strong>All Notice  lists</strong></h4>
                @endif

              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                    @if ($recycleBinLists->count() > 0)
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
                          @if ($recycleBinLists->count() > 0)
                              @foreach ($recycleBinLists as $notice )
                              <tr>
                                  <th scope="row">{{$loop->index+1}}</th>
                                  <td>{{$notice->notice_name}}</td>
                                    <td>{{$notice->relationWithUser->name}}</td>
                                    <td>{{ Str::limit($notice->notice_description, 50) }}</td>
                                    <td>{{$notice->status}}</td>
                                  <td>

                                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                        <button type="button" class="btn btn-danger"><a href="{{route('notice.permanent.delete', $notice->id)}}" class="text-decoration-none text-white">P.DELETE</a></button>
                                        <button type="button" class="btn btn-info"><a href="{{route('notice.restore', $notice->id)}}" class="text-white">RESTORE</a></button>
                                      </div>

                                    {{-- <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                        <button type="button" class="btn btn-warning"><a class="text-white" href="">View</a></button>
                                      </div>
                                    @endif --}}

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
                    <button class="btn btn-danger"><a href="{{route('notice.all')}}" class="text-white text-decoration-none">Back</a></button>
              </div>
            </div>

          </div>
        </div>

        <!--/ Total Revenue -->
      </div>

    </div>
@endsection
