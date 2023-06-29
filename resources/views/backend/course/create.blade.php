     @extends('layouts.dashboard_master')
          @section('content')
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">



                <!-- Total Revenue -->
                <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4 mx-auto">
                  <div class="card">
                    <div class="row row-bordered g-0">
						<h4 class="text-center p-2"><strong>Upload Your Courses</strong></h4>
                      <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
							<form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
								<div class="mb-3">
									<label for="formGroupExampleInput" class="form-label"><b class="fs-5">Course Title</b></label>
									<input type="text" class="form-control" name="course_title" placeholder="Enter Your Title">
								  </div>

								<div class="mb-3">
									<label for="formGroupExampleInput" class="form-label"><b class="fs-5">Course Price</b></label>
									<input type="number" class="form-control" name="course_price" placeholder="Enter Your Price">
								  </div>

								  <div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label"><b class="fs-5">Course Description</b></label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="course_description"></textarea>
								  </div>

								  <div class="mb-3">
									<label for="formFile" class="form-label"><b class="fs-5">Course Image</b></label>
									<input class="form-control" type="file" id="formFile" name="course_image">
								  </div>
								  <div class="mb-3">
									<label for="formFile" class="form-label"></label>
									<button class="btn  btn-success" style="background-color: rgb(68, 77, 204);">Upload Course</button>
								  </div>

							</form>


                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->

              </div>

            </div>
            <!-- / Content -->

          @endsection

