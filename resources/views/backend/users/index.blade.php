
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
                <h4 class="text-center p-2"><strong>All Users lists</strong></h4>
              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                <table class="table table-bordered border-primary" id="example">
                  <thead>
                    <tr>
                      <th scope="col">Serial No</th>
                      <th scope="col">User Name</th>
                      <th scope="col">User Email</th>
                      <th scope="col">User Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($users->count() > 0)
                        @foreach ($users as $user )
                        <tr>
                            {{-- <td>
                                <form action="">
                                    <input type="checkbox" name="" id="">delete
                                </form>
                            </td> --}}
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if ($user->isOnline())
                                    <b class="text-primary">ONLINE</b>
                                @else
                                    <b class="text-danger">OFFLINE</b>
                                @endif
                            </td>
                            <td>
                              <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                <button type="button" class="btn btn-danger">DELETE</button>
                                <button type="button" class="btn btn-info"><a href="" class="text-white">EDIT</a></button>
                                <button type="button" class="btn btn-warning"><a class="text-white" href="">View</a></button>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                    @else
                          <tr>
                            <td colspan="8" align="center">No User Uploaded Yet</td>
                          </tr>
                    @endif


                  </tbody>
                </table>
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
