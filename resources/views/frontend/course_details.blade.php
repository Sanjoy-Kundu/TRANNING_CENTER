
@extends('layouts.frontend_master')
@section('content')
    <main id="main">

      <!-- ============Marquee Section start =========-->
        <section id="news" class="about">
          <div class="container" data-aos="fade-up">
            <div class="row pt-5">
          <div class="col-md-12">
              <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                  <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news"><span class="d-flex align-items-center">&nbsp;Notice</span></div>
                  <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">Admisssion Going On 24 december
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
                {{$course_details}}
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



      <!-- ======= Trainers Section ======= -->
      <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Realted Course</h2>
            <p>Related Course</p>
          </div>


          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{asset('assets/frontend')}}/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Walter White</h4>
                  <span>Web Development</span>
                  <p>
                    Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{asset('assets/frontend')}}/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Sarah Jhinson</h4>
                  <span>Marketing</span>
                  <p>
                    Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{asset('assets/frontend')}}/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>William Anderson</h4>
                  <span>Content</span>
                  <p>
                    Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <button class="btn btn mx-auto mt-3" style="width: 150px; background-color: #63e791;"><a href="" class="text-white
              text-decoration-none" >All Trainers</a></button>
          </div>

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
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('assets/frontend')}}/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Walter White</h4>
                <span>Web Development</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('assets/frontend')}}/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('assets/frontend')}}/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <button class="btn btn mx-auto mt-3" style="width: 155px; background-color: #63e791;padding: 12px; font-size: 16px;font-weight: 500;">
            <a href="" class="text-white
            text-decoration-none" >All Studnet Story</a></button>
        </div>

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
                <div class="col-lg-3 col-md-4">
                  <div class="icon-box">
                    <i class="ri-store-line" style="color: #ffbb2c;"></i>
                    <h3><a href="">Lorem Ipsum</a></h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                  <div class="icon-box">
                    <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                    <h3><a href="">Dolor Sitema</a></h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                  <div class="icon-box">
                    <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                    <h3><a href="">Sed perspiciatis</a></h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                  <div class="icon-box">
                    <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                    <h3><a href="">Magni Dolores</a></h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                  <div class="icon-box">
                    <i class="ri-database-2-line" style="color: #47aeff;"></i>
                    <h3><a href="">Nemo Enim</a></h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                  <div class="icon-box">
                    <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                    <h3><a href="">Eiusmod Tempor</a></h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                  <div class="icon-box">
                    <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                    <h3><a href="">Midela Teren</a></h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                  <div class="icon-box">
                    <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                    <h3><a href="">Pira Neve</a></h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                  <div class="icon-box">
                    <i class="ri-anchor-line" style="color: #b2904f;"></i>
                    <h3><a href="">Dirada Pack</a></h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                  <div class="icon-box">
                    <i class="ri-disc-line" style="color: #b20969;"></i>
                    <h3><a href="">Moton Ideal</a></h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                  <div class="icon-box">
                    <i class="ri-base-station-line" style="color: #ff5828;"></i>
                    <h3><a href="">Verdo Park</a></h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                  <div class="icon-box">
                    <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                    <h3><a href="">Flavor Nivelanda</a></h3>
                  </div>
                </div>
              </div>

            </div>
          </section>
          <!-- End Features Section -->
    </main><!-- End #main -->


@endsection
