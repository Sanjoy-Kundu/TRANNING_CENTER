     @extends('layouts.dashboard_master')
          @section('content')
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">



                <!-- Total Revenue -->
                <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4 mx-auto">
                  <div class="card">
                    <div class="row row-bordered g-0">
                        @if (session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                        @endif
						<h4 class="text-center p-2"><strong>Upload Your Courses</strong></h4>
                      <div class="col-md-12 col-12 col-xl-12 col-xxl-12 p-5">
							<form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
								<div class="mb-3">
									<label for="formGroupExampleInput" class="form-label"><b class="fs-5">Course Title</b></label>
									<input type="text" class="form-control" name="course_title" placeholder="Enter Your Title">
                                    @error('course_title')
                                        <span class="text-danger"><b>{{$message}}</b></span>
                                    @enderror
								  </div>

                                  <div class="mb-3">
									<label for="formGroupExampleInput" class="form-label"><b class="fs-5">Course Instructor</b></label>
                                    <select class="form-select" name="instructor_id">
                                        @if (count($Instructors) > 0 )
                                        <option value="">Select Your Instructor</option>
                                        @foreach ($Instructors as  $Instructor)
                                            <option value="{{$Instructor->id}}">{{$Instructor->trainer_name}}({{$Instructor->trainer_title}})</option>
                                        @endforeach
                                        @else
                                        <option value="">Please Upload Your Instructor</option>
                                        @endif

                                         </select>
									{{-- <input type="text" class="form-control" name="course_title" placeholder="Enter Your Title">
                                    @error('course_title')
                                        <span class="text-danger"><b>{{$message}}</b></span>
                                    @enderror --}}
								  </div>


								<div class="mb-3">
									<label for="formGroupExampleInput" class="form-label"><b class="fs-5">Course Category</b></label>
                                    <select class="form-select" name="category_id">
                                        @if (count($courseCategories) > 0 )
                                        <option value="">Select Your Category</option>
                                        @foreach ($courseCategories as  $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                        @else
                                        <option value="">Please Upload Your Category</option>
                                        @endif

                                         </select>
									{{-- <input type="text" class="form-control" name="course_title" placeholder="Enter Your Title">
                                    @error('course_title')
                                        <span class="text-danger"><b>{{$message}}</b></span>
                                    @enderror --}}
								  </div>


								<div class="mb-3">
									<label for="formGroupExampleInput" class="form-label"><b class="fs-5">Course Price</b></label>
									<input type="number" class="form-control" name="course_price" placeholder="Enter Your Price">
                                    @error('course_price')
                                    <span class="text-danger"><b>{{$message}}</b></span>
                                   @enderror
                                </div>

                                <div class="mb-3">
									<label for="formGroupExampleInput" class="form-label"><b class="fs-5">Course Duration</b></label>
									<input type="number" class="form-control" name="course_duration" placeholder="Enter Your Price">
                                    @error('course_duration')
                                    <span class="text-danger"><b>{{$message}}</b></span>
                                   @enderror
                                </div>


								<div class="mb-3">
									<label for="formGroupExampleInput" class="form-label"><b class="fs-5">Discount</b></label>
									<input type="number" class="form-control" name="discount" placeholder="Enter Your Discount">
                                    @error('discount')
                                    <span class="text-danger"><b>{{$message}}</b></span>
                                   @enderror
								  </div>

								{{-- <div class="mb-3">
									<label for="formGroupExampleInput" class="form-label"><b class="fs-5">Discounted Price</b></label>
									<input type="number" class="form-control" name="discounted_price" placeholder="Enter Your Discounted Price">
                                    @error('discounted_price')
                                    <span class="text-danger"><b>{{$message}}</b></span>
                                   @enderror
								  </div> --}}



								  <div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label"><b class="fs-5">Course Description</b></label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="course_description"></textarea>
                                    @error('course_description')
                                    <span class="text-danger"><b>{{$message}}</b></span>
                                   @enderror
								  </div>


								<div class="mb-3">
									<label for="formGroupExampleInput" class="form-label"><b class="fs-5">Total Seats</b></label>
									<input type="number" class="form-control" name="total_seats" placeholder="Enter Total Seats">
                                    @error('total_seats')
                                    <span class="text-danger"><b>{{$message}}</b></span>
                                   @enderror
								  </div>


								  <div class="mb-3">
									<label for="formFile" class="form-label"><b class="fs-5">Course Image</b></label>
									<input class="form-control" type="file" id="formFile" name="course_image">
                                    @error('course_image')
                                    <span class="text-danger"><b>{{$message}}</b></span>
                                   @enderror
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


    <script>
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 5',
        tabsize: 2,
        height: 100
      });
    </script>


          @endsection

