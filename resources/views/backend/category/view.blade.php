
@extends('layouts.dashboard_master')

@section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Total Revenue -->
        <div class="col-12 col-lg-9 order-2 order-md-3 order-lg-2 mb-4 mx-auto">
            <h2 class="text-center">Categroy Details</h2>
          <div class="card pt-5">
            @if ($category_details->category_image)
            <img src="{{asset('uploads/category')}}/{{$category_details->category_image}}" alt="not found" class="card-img-top img-fluid img-thumbnail w-50 mx-auto">
            @else
            <img src="{{asset('uploads/category/default_category.jpg')}}" alt="">
            @endif
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h3>Category Name: {{$category_details ->category_name}}</h3></li>
                        <li class="list-group-item"><h3>Creation Date: {{$category_details->created_at->format('d-M-Y')}}</h3></li>
                      </ul>
                </div>


          </div>
        </div>
        <!--/ Total Revenue -->
      </div>
    </div>





@endsection
