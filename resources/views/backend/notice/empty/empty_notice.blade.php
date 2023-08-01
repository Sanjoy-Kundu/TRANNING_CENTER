@extends('layouts.dashboard_master')
@section('content')
<div class="content-wrapper">
    <div class="d-flex align-items-center justify-content-center">
        <div class="p-2 m-2  text-white shadow rounded-2">
            <h3 class="text-center mb-5">Your Notice is empty</h3>
            <img src="{{asset('assets/empty_img/empty notice.jpg')}}" class="img-fluid img-thumbnail w-50 h-50 mx-auto" alt="">
        </div>
    </div>
</div>
@endsection
