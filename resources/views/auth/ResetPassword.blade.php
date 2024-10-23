@extends('sharing.master')
@section('content')
    <div class="reset-password ">
        <div class="reset-password-content d-flex flex-column justify-content-evenly align-items-center text-center ">
            <h1>Create New Password</h1>
            <div class="reset-form-logo"></div>
            <p>
                Your New Password Must Be Different
                from Previously Used Password
            </p>
            <form action="{{ route('change_password') }}" method="POST"
                class="w-75 d-flex flex-column justify-content-evenly">
                @csrf
                <div class="input-group d-flex flex-column justify-content-evenly text-start">
                    <label class="mb-2">New Password</label>
                    <input type="password" name="password" placeholder="New Password" class="form-control w-100">
                </div>
                <div class="input-group d-flex flex-column justify-content-evenly text-start">
                    <label class="mb-2">New Password</label>
                    <input type="password" name="confirm-password" placeholder="Confirm Password"
                        class="form-control w-100">
                </div>
                @if (isset($user) && $user != null)
                    <input type="hidden" name='id' value='{{ $user->q }}'>
                @endif
                <input type="submit" value="Save" class="btn btn-success w-100">
            </form>
        </div>
    </div>
@stop




{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>new password</title>
  <link rel="stylesheet" href="css/styles2.css">
</head>

<body>

  <div class="wrapper">

    <form action="" method="POST">
       @csrf
      <p class="create"> Create New Password</p>

      <img src="./images/3.jpeg"
        style="width: 100px; height: 100px;margin: 20px 0px 20px 120px; margin-left:130px;border-radius: 50%;">

      <p class="par"> Your New Password Must Be Different </p>
      <p class="par2">from Previously Used Password</p>

      <label class="label">New Password</label>
      <input class="input" type="password" name="password" placeholder="New Password" required>
      <br><br>

      <label class="label"> Confirm Password</label>
      <input class="input" type="password" name="confirm_password" placeholder="Confirm New Password" required>
      @if (isset($user) && $user != null)
         <input type="hidden"name='id' value='{{$user->q}}'>
      @endif
      <button type="submit" class="btn">save</button>

    </form>

  </div>

</body>

</html> --}}
