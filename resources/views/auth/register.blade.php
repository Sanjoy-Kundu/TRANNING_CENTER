<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/frontend')}}/img/favicon.png" rel="icon">
  <link href="{{asset('assets/frontend')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/frontend')}}/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{asset('assets/frontend')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('assets/frontend')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('assets/frontend')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('assets/frontend')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('assets/frontend')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('assets/frontend')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/frontend')}}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



  <main class="mt-5">
	<section class="container mx-auto">
		<article>
			<h1 class="text-center">Wellcome To Your Registration From</h1>
			<p class="text-center">Start Your Coding Journey with Mentor</p>
		</article>
		<section class="registration-form p-5 w-75 mx-auto">
				<form method="POST" action="{{ route('register') }}" class="form-control py-5 px-4">
                    @csrf
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Student Name*</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Student name here" name="name">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
					  </div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Student Email*</label>
						<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Student Email here" name="email">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
					  </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password"  name="password" placeholder="Enter Your Password">
                        @error('password')
                        <span class="text-danger">{{$message}}</span> <br>
                        @enderror
                        <input type="checkbox" onclick="pFunction()"> Show Password
                    </div>
            <div class="mb-3">
              <label for="" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="confirm_password" placeholder="Confirm password here" name="password_confirmation">
              @error('password_confirmation')
              <span class="text-danger">{{$message}}</span> <br>
              @enderror
              <input type="checkbox" onclick="cpFunction()">  Show Confirm Password
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-lg" style="background-color: rgb(69, 212, 66);"> REGISTRATION</button>
              </div>
              <div class="mb-3">
                <h5 style="font-weight: bolder"><span>Already Have an Account?</span>Please <a href="{{url('login')}}">Login</a></h5>
              </div>
				</form>

		</section>
	</section>
  <!--===========Password show javascript start==========-->
  <script>
    function cpFunction(){
      var y = document.getElementById('confirm_password');
      if(y.type === 'password'){
        y.type = 'text';
      }else{
        y.type = "password";
      }
    }



function pFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}




  </script>
  <!--===========Password show javascript  end==========-->

  </main>

  <!-- ======= Footer ======= -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/frontend')}}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('assets/frontend')}}/vendor/aos/aos.js"></script>
  <script src="{{asset('assets/frontend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('assets/frontend')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('assets/frontend')}}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/frontend')}}/js/main.js"></script>

</body>

</html>
