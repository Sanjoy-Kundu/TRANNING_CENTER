
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
                <h4 class="text-center p-2"><strong>All Course lists</strong></h4>
              <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
                <table class="table table-bordered border-primary w-100" id="example">
                  <thead>
                    <tr>

                      <th scope="col">Serial No</th>
                      <th scope="col">Trainer Name</th>
                      <th scope="col">TrainerTitle</th>
                      <th scope="col">Trainer Duration</th>
                      <th scope="col">Trainer Salary</th>
                      <th scope="col">Image</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>

                   <tbody>
                    @if ($trainers->count() > 0)
                        @foreach ($trainers as $trainer )
                        <tr>
                            {{-- <td>
                                <form action="">
                                    <input type="checkbox" name="" id="">delete
                                </form>
                            </td> --}}
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$trainer->trainer_name}}</td>
                            <td>{{$trainer->trainer_title}}</td>
                            <td>{{$trainer->trainer_description}}</td>
                            <td>{{$trainer->trainer_salary}}</td>
                            <td align="center">
                                @if ($trainer->trainer_image)
                                <img src="{{asset('uploads/trainers')}}/{{$trainer->trainer_image}}" alt="" class="rounded" style="width: 100px; height:100px">
                                @else
                                <img src="{{asset('uploads/trainres/default.png')}}" alt="" class="h-50 w-50">
                                @endif


                            <td>
                              <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                <button type="button" class="btn btn-danger">DELETE</button>
                                <button type="button" class="btn btn-info"><a href="{{route('trainer.edit', $trainer->id)}}">EDIT</a></button>
                                <button type="button" class="btn btn-warning"><a class="text-white" href="{{route('trainer.view', $trainer->id)}}">View</a></button>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                    @else

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
