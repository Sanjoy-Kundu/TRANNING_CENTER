@extends('layouts.profile_dashboard_master')
@section('content')
    <div class="content-wrapper">
            <div class="container">
                <h1 class="p-3">Make Your Advacne Account</h1>
                <hr>
                <h2 class="text-center">How it works</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('assets/advanceProfileImg/talent.png')}}" class="w-50 h-75 mx-auto img-fluid" alt="...">
                            <div class="card-body">
                            <h3 class="card-title">1. Create Talent account</h3>
                            </div>
                        </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                            <img src="{{asset('assets/advanceProfileImg/profile.png')}}" class="w-50 h-75 mx-auto img-fluid" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">2. Your profile will be shown to recruiter</h3>
                            </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                            <img src="{{asset('assets/advanceProfileImg/response.png')}}" class="w-50 h-75 mx-auto img-fluid" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">3. Respond to the invitation and schedule an Interview</h3>
                            </div>
                            </div>
                        </div>
                </div>
                <hr>

                <div class="card text-center mt-5 mb-5">
                    <div class="card-body">
                      <h1 class="card-title">Create A Talentpool Account</h1>
                      <h5 class="card-text">With supporting text below as a natural lead-in to additional content.In order to show your skill to our recruiters and to get hired,  you need to create a advance profile account</h5>
                      <a href="#" class="btn btn-warning">Make Your Advacne Profile Account</a>
                    </div>
                  </div>
            </div>
    </div>
@endsection
