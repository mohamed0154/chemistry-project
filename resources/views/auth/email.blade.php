@extends('sharing.master')
@section('content')

    <div class="reset-password ">
        <div class="verify-email">
            <div class="reset-password-content d-flex flex-column justify-content-evenly align-items-center text-center ">
                <div class="text-white d-flex align-items-center fp-logo w-75">
                    <i class="fa-solid fa-arrow-left-long border-end border-light bg-secondary fs-3 lg-arrow">
                    </i><span class="bg-success rounded-end-1 fs-4">forget Password</span>
                </div>
                <div class="reset-form-logo"></div>
                <p>
                    please enter your Email Address To
                    Recive a Verification Code
                </p>
                <form action="{{ route('ensure_email') }}" method="POST"
                    class="w-75 d-flex flex-column justify-content-evenly">
                    @csrf
                    <div class="input-group d-flex flex-column justify-content-evenly text-start">
                        <label class="mb-2">Email</label>
                        <input type="email" name="email" placeholder="New Password" class="form-control w-100">
                    </div>
                    <input type="submit" value="Save" class="btn btn-success w-100">
                </form>
            </div>
        </div>

    </div>
@stop




{{--
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab Hub</title>
  <link rel="stylesheet" href="css/styles2.css">
</head>

<body>

  <div class="wrapper">
    <form action="" method="POST">
        @csrf
      <span class="pass">
        <span>&#11013;</span>
        <label style="font-size: 20px; color: rgb(4, 3, 3);">forget Password </label>
      </span>
      <img src="./images/7.jpeg"
        style="width: 100px; height: 100px; margin-left:135px; margin-top: 20px; margin-bottom: 20px;border-radius: 50%;">
      <p class="par">please enter your Email Address To</p>
      <p class="par2"> Recive a Verification Code</p>
      <label class="btn5">Email Address</label>
      <input class="input" name="email" type="email" placeholder="Email Address" required>
      <button type="submit" name="submit" class="btn2">Send</button>

    </form>

  </div>

</body>

</html> --}}
