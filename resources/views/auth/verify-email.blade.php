<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
  <style>
    /* Custom CSS to center the content */
    body, html {
      height: 100%;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .center-div {
      max-width: 600px;
      padding: 20px;
      text-align: center;
    }
  </style>
  <title>mail Verification</title>
</head>
<body>

  <div class="center-div">
    <!-- Your content goes here -->
    <div class="card" style="background-color: rgb(151, 229, 151)">
      <div class="card-body">
        <h1 class="card-title">Confirm Your Verification Email</h1>
        <p class="card-text">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
      </div>
      @if (session('status') == 'verification-link-sent')
      <div class="mb-4 text-primary">
          <p>A new verification link has been sent to the email address you provided during registration.</p>
      </div>
    @endif

    <div class="mt-4">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <button class="btn btn-primary">Resend Verification Email </button>
            </div>
        </form>


        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="underline text-sm text-dnger btn btn-danger mt-2">Log Out</button>
        </form>


    </div>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>

