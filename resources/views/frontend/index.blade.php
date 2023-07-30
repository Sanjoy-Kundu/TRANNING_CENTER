
@extends('layouts.frontend_master')
@section('content')
 <!-- ======= Hero Section ======= -->
 <section id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="1000">
         <img src="{{asset('assets/frontend')}}/img/course-3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{asset('assets/frontend')}}/img/course-1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/frontend')}}/img/course-2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </section>



    <!-- <section id="hero" class="d-flex justify-content-center align-items-center">
  <div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    </section> -->
    <!-- End Hero -->

    <main id="main">

      <!-- ============Marquee Section start =========-->
        <section id="news" class="about">
          <div class="container" data-aos="fade-up">
            <div class="row ">
          <div class="col-md-12">
              <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                  <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news logo"><span class="d-flex align-items-center ">&nbsp;Notice</span></div>
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
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="{{asset('assets/frontend')}}/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>Description</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem vitae esse nobis alias eum aspernatur repudiandae dolore culpa rerum repellat eligendi assumenda facere pariatur, possimus sunt. Molestias saepe, voluptatum dicta eligendi inventore assumenda labore reprehenderit quos ab, totam pariatur? Illum odit nihil expedita cum fugit modi quae ab facilis ipsum. <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis fugit aliquid molestias iure tempora ad repellendus sed laborum commodi natus autem quam voluptatibus quis saepe enim facilis cupiditate placeat, odio animi, tempore veniam, eum tenetur voluptate cum? Ut accusantium repudiandae corrupti, omnis illo ab commodi nulla ea quas aperiam quasi.</p>
            </div>
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

      <!-- ======= Why Us Section ======= -->
      <!-- <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

          <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="content">
                <h3>Why Choose Mentor?</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                  Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
                </p>
                <div class="text-center">
                  <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-receipt"></i>
                      <h4>Corporis voluptates sit</h4>
                      <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-cube-alt"></i>
                      <h4>Ullamco laboris ladore pan</h4>
                      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-images"></i>
                      <h4>Labore consequatur</h4>
                      <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section> -->
      <!-- End Why Us Section -->



      <!-- ======= Popular Courses Section ======= -->
      <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Courses</h2>
            <p>Popular Courses</p>
          </div>

          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @forelse ($all_courses as $course )

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



            {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="course-item">
                <img src="{{asset('assets/frontend')}}/img/course-2.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Marketing</h4>
                    <p class="price">$250</p>
                  </div>

                  <h3><a href="course-details.html">Search Engine Optimization</a></h3>
                  <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="{{asset('assets/frontend')}}/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                      <span>Lana</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;35
                      &nbsp;&nbsp;
                      <i class="bx bx-heart"></i>&nbsp;42
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End Course Item--> --}}

            {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="course-item">
                <img src="{{asset('assets/frontend')}}/img/course-3.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Content</h4>
                    <p class="price">$180</p>
                  </div>

                  <h3><a href="course-details.html">Copywriting</a></h3>
                  <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="{{asset('assets/frontend')}}/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                      <span>Brandon</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;20
                      &nbsp;&nbsp;
                      <i class="bx bx-heart"></i>&nbsp;85
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End Course Item--> --}}


          </div>
          <button class="btn btn mx-auto mt-3" style="width: 150px; background-color: #63e791;"><a href="" class="text-white
            text-decoration-none" >All Courses</a></button>
        </div>
      </section><!-- End Popular Courses Section -->




      <!-- ======= Trainers Section ======= -->
      <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Trainers</h2>
            <p>Our Trainers</p>
          </div>


          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach ($all_trainers as $trainer )
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
      <!-- End Trainers Section -->




    <!--======Student Successfull Story ==========-->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Student Conrner</h2>
          <p>Student Successfull Story</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @if ($all_success_students->count() > 0)
            @foreach ($all_success_students as $success_student )
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    @if ($success_student->student_image)
                    <img src="{{asset('uploads/student_success')}}/{{$success_student->student_image}}" class="img-fluid" alt="">
                    @else
                    <img src="{{asset('uploads/student_success/default.jpg')}}" class="img-fluid" alt="">
                    @endif
                  <div class="member-content">
                    <h4>{{$success_student->student_name}}</h4>
                    <span>{{$success_student->student_title}}</span>
                    <p> {{Str::of($success_student->student_story)->limit(150)}} <a href="" class="text-primary">Read More</a></p>
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
            @else
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <img src="{{asset('uploads/student_success/default.jpg')}}" class="img-fluid" alt="">

                  <div class="member-content">
                    <h4>Demo Name</h4>
                    <span>Demo Title</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, ullam?</p>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            @endif

        </div>
        <button class="btn btn mx-auto mt-3" style="width: 155px; background-color: #63e791;padding: 12px; font-size: 16px;font-weight: 500;">
            <a href="" class="text-white
            text-decoration-none" >All Studnet Story</a></button>
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
