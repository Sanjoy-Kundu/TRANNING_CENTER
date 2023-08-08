@extends('layouts.profile_dashboard_master')
@section('content')
        <div class="content-wrapper">
            <div class="container">
                <h1 class="text-center pt-3">Wellcome to  {{Auth::user()->name}} Profile</h1>
                  <div class="w-75 mx-auto mt-3 mb-3">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label"><b class="fs-4">Your Name</b></label>
                            <input type="text" class="form-control" id="" name="job_profile_name" placeholder="Enter Your Name">
                          </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b class="fs-4">Your Email</b></label>
                            <input type="email" class="form-control" id="" name="job_profile_email" placeholder="Enter Your Email">
                          </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b class="fs-4">Your Designation</b></label>
                            <input type="text" class="form-control" id="" name="job_profile_designation" placeholder="Enter Your Title">
                          </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b class="fs-4">Your Phone Number</b></label>
                            <input type="tel" class="form-control" id="" name="job_profile_phone_number" placeholder="Enter Your Number">
                          </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b class="fs-4">Your Address</b></label>
                            <input type="text" class="form-control" id="" name="job_profile_address" placeholder="Enter Your Address">
                          </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b class="fs-4">Your Skills</b></label>
                            <input type="text" class="form-control" id="" name="job_profile_your_skills" placeholder="html, css, bootstrap, javascript, Mysql">
                          </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b class="fs-4">Your Portfolio Links</b></label>
                            <input type="text" class="form-control" id="" name="job_profile_portfolio" placeholder="Enter Your Portfolio Link">
                          </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b class="fs-4">Your Github Account Link</b></label>
                            <input type="text" class="form-control" id="" name="job_profile_github_account" placeholder="Enter Your Github Link">
                          </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b class="fs-4">Upload Your Photo</b></label>
                            <input type="file" class="form-control" id="" name="job_profile_your_photo" >
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                            <!--Add Education Modal-->
                                 <!-- Modal -->
                                 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title text-center" id="exampleModalLabel">Add Your Educational Qualification</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                                <form action="">
                                                    <div class="mb-3">
                                                        <label for="">Institute Name</label>
                                                        <input type="text" class="form-control" name="institute_name" placeholder="Enter Your Institute Name">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="">Degree</label>
                                                        <input type="text" class="form-control" name="degree" placeholder="Enter Your Degree Name">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="">Subject</label>
                                                        <input type="text" class="form-control" name="subject" placeholder="Enter Your Subject Name">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="">Duration</label>
                                                        <div class="div d-flex justify-between">
                                                            Start<input type="date" class="form-control w-50" name="starting_date">
                                                            End<input type="date" class="form-control w-50" name="ending_date">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="on_going" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">Ongoing</label>
                                                          </div>
                                                    </div>
                                                    <button type="button" class="btn btn-primary mt-3">Submit</button>
                                                </form>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                   <!-- Modal -->
                          <button type="button" class="btn btn-warning mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Education</button>
                <!--Add Education Modal-->




                          <!--Add Work Experience Modal--->
                                                           <!-- Modal -->
                                                           <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title text-center" id="exampleModalLabel">Add Your Work Experience</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                        <form action="">
                                                                            <div class="mb-3">
                                                                                <label for="">Company Name</label>
                                                                                <input type="text" class="form-control" name="company_name" placeholder="Enter Your Company Name">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="">Website Link</label>
                                                                                <input type="url" class="form-control" name="compnay_website" placeholder="Enter Your Website Link">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="">Description</label>
                                                                                <textarea name="description" id="" cols="20" rows="5" class="form-control"></textarea>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="currently_working" id="flexCheckDefault">
                                                                                    <label class="form-check-label" for="flexCheckDefault">Currently Working Here</label>
                                                                                  </div>
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="">Working Duration</label>
                                                                                <div class="div d-flex justify-between">
                                                                                    <input type="date" class="form-control w-50" name="joing_starting_date">
                                                                                    <input type="date" class="form-control w-50" name="joing_ending_date">
                                                                                </div>
                                                                            </div>
                                                                            <button type="button" class="btn btn-primary mt-3">Submit</button>
                                                                        </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                         <!-- Modal -->
                          <button type="" class="btn btn-warning mt-3"  data-bs-toggle="modal" data-bs-target="#exampleModal2">Work Experience</button>
                          <!--Add Work Experience Modal--->
                  </div>
            </div>
        </div>
@endsection
