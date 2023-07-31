
@extends('layouts.frontend_master')
@section('content')
    <main id="main">
      <!-- ============Marquee Section start =========-->
      <section id="news" class="about mt-5">
        <div class="container" data-aos="fade-up">
          <div class="row ">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news logo"><span class="d-flex align-items-center" >&nbsp;Notice</span></div>
                <marquee class="news-scroll fs-3" behavior="scroll" direction="left"> <mark> {{$notice[0]->notice_description}}</mark>
                </marquee>
              </div>
          </div>
      </div>
        </div>
      </section>
    <!-- ============Marquee Section end =========-->





      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="row gx-5">
                {{-- {{$course_details}} --}}
                <div class="col">
                 <div class="p-1 border bg-light" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{asset('uploads/course')}}/{{$course_details->course_image}}" class="img-fluid w-100 h-auto mx-auto" alt="">
                 </div>
                </div>
                <div class="col">
                  <div class=" border bg-light">
                    <table class="table table-border-collapse">
                        <tr>
                            <td><h5>Course Name</h5></td>
                            <td><h5>{{$course_details->course_title}}</h5></td>
                        </tr>
                        <tr>
                            <td><h5>Course Category</h5></td>
                            <td><h5>{{$course_details->relationWithCategory->category_name}}</h5></td>
                        </tr>
                        @if ($course_details->discount)
                        <tr>
                            <td><h5>Course Discount</h5></td>
                            <td><h5>{{$course_details->discount}}%</h5></td>
                        </tr>
                        @else
                        <tr>
                            <td><h5>Course Discount</h5></td>
                            <td><h5>N/A</h5></td>
                        </tr>
                        @endif

                        @if ($course_details->discount)
                        <tr>
                            <td><h5>Course Price</h5></td>
                            <td><h5><del class="text-danger">{{$course_details->course_price}}BDT.</del> &nbsp; {{$course_details->discounted_price}} BDT. </h5></td>
                        </tr>
                        @else
                        <tr>
                            <td><h5>Course Price</h5></td>
                            <td><h5>{{$course_details->course_price}} BDT</h5></td>
                        </tr>
                        @endif
                        <tr>
                            <td><h5>Course Duration</h5></td>
                            <td><h5>{{$course_details->course_duration}} Months</h5></td>
                        </tr>
                        <tr>
                            <td><h5>Total Seats</h5></td>
                            <td><h5>{{$course_details->total_seats}}</h5></td>
                        </tr>
                        <tr>
                            <td><h5>Course Description</h5></td>
                            <td><p>{{$course_details->course_description}}</p></td>
                        </tr>
                        <tr>
                            <td><h5>Trainer Name</h5></td>
                            <td><h5>{{$course_details->relationWithTrainers->trainer_name}}</h5></td>
                        </tr>
                        <tr>
                            <td><h5>Trainer Info</h5></td>
                            <td><h5><button class="btn btn-warning"><a href="" class="text-white">See More</a></button></h5></td>
                        </tr>
                    </table>


                  </div>
                </div>
              </div>
            {{-- <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="{{asset('assets/frontend')}}/img/about.jpg" class="img-fluid" alt="">
            </div> --}}

            {{-- <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>Description</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem vitae esse nobis alias eum aspernatur repudiandae dolore culpa rerum repellat eligendi assumenda facere pariatur, possimus sunt. Molestias saepe, voluptatum dicta eligendi inventore assumenda labore reprehenderit quos ab, totam pariatur? Illum odit nihil expedita cum fugit modi quae ab facilis ipsum. <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis fugit aliquid molestias iure tempora ad repellendus sed laborum commodi natus autem quam voluptatibus quis saepe enim facilis cupiditate placeat, odio animi, tempore veniam, eum tenetur voluptate cum? Ut accusantium repudiandae corrupti, omnis illo ab commodi nulla ea quas aperiam quasi.</p>
            </div> --}}

          </div>

        </div>
      </section><!-- End About Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts section-bg">
        <div class="container">

          <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Students</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
              <p>Courses</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
              <p>Events</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Trainers</p>
            </div>

          </div>

        </div>
      </section><!-- End Counts Section -->



      <!-- ======= Related Course Section ======= -->
      <section id="related-courses" class="courses">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Courses</h2>
            <p>Related Course Courses</p>
          </div>

          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @forelse ($related_courses as $course )

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="course-item">
                  <img src="{{asset('uploads/course')}}/{{$course->course_image}}" class="img-fluid" alt="...">
                  <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4>{{$course->relationWithCategory->category_name}}</h4>
                      <p class="price">BDT {{$course->course_price}}</p>
                    </div>

                    <h3>Course:<a href=""> {{$course->course_title}}</a></h3>
                    {{-- Str::limit('The quick brown fox jumps over the lazy dog', 20, ' (...)'); --}}
                    <h5><b>Descripiton</b>: {{Str::limit($course->course_description, 50, '...');}}</h5>
                    <div class="trainer d-flex justify-content-between align-items-center">
                      <div class="trainer-profile d-flex align-items-center">
                        <img src="{{asset('uploads/trainers')}}/{{$course->relationWithTrainers->trainer_image}}" class="img-fluid" alt="">
                        <span>Instructor: <strong>{{$course->relationWithTrainers->trainer_name}}</strong></span>
                      </div>
                      <div class="trainer-rank d-flex align-items-center">
                        <button class="btn btn-warning"><a class="text-white" href="{{route('course.details', $course->id)}}">Details</a></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- End Course Item-->
            @empty

            @endforelse




          </div>
          <button class="btn btn mx-auto mt-3" style="width: 150px; background-color: #63e791;"><a href="" class="text-white
            text-decoration-none" >All Courses</a></button>
        </div>
      </section><!-- End Popular Courses Section -->
      <!-- End Trainers Section -->




    <!--======Student Successfull Story ==========-->
    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Trainers</h2>
            <p>Our Trainers</p>
          </div>


          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach ($related_trainers as $trainer )
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    @if ($trainer->trainer_image)
                    <img src="{{asset('uploads/trainers')}}/{{$trainer->trainer_image}}" class="img-fluid" alt="">
                    @else
                    <img src="{{asset('uploads/trainers/default.jpg')}}" class="img-fluid" alt="">
                    @endif
                  <div class="member-content">
                    <h4>{{$trainer->trainer_name}}</h4>
                    <span>{{$trainer->trainer_title}}</span>
                    <p>{{Str::of($trainer->trainer_description)->limit(150)}} <a href="" class="text-primary">More</a></p>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          <button class="btn btn mx-auto mt-3" style="width: 150px; background-color: #63e791;"><a href="" class="text-white
            text-decoration-none" >All Trainers</a></button>
        </div>
      </section>
    <!--======Student Successfull Story ==========-->






      <!---======Join Our seminer ========--->
      <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Seminer</h2>
            <p>Join Our Seminer</p>
          </div>


          <div class="row mt-5">

            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt fs-3" style="color:rgb(26, 240, 54)"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope fs-3" style="color:rgb(26, 240, 54)"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone fs-3" style="color:rgb(26, 240, 54)"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55s</p>
                </div>
              </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <!-- <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div> -->
                <div class="text-center mt-3"><button type="submit" class="btn btn" style="background-color: #57da85;">Send Message</button></div>
              </form>

            </div>

          </div>

        </div>
      </section>
      <!---======Join Our seminer ========--->







          <!-- ======= Features Section ======= -->
          <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Company</h2>
                <p>Our Partner</p>
              </div>

              <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($all_partners as $partner)
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box">
                            <img style="height: 70px; width:100px" src="{{asset('uploads/partners')}}/{{$partner->partner_image}}" alt="">
                            <h3 style="margin-left: 5px">{{$partner->partner_name}}</h3>
                        </div>
                    </div>
                @endforeach


              </div>
              <button class="btn btn mx-auto mt-3" style="width: 155px; background-color: #63e791;padding: 12px; font-size: 16px;font-weight: 500;">
                <a href="" class="text-white
                text-decoration-none" >All Group</a></button>
            </div>
          </section>
          <!-- End Features Section -->
    </main><!-- End #main -->


@endsection
