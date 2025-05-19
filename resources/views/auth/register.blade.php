@extends('sharing.master')
@section('title','sign-up')
@section('content')
    <div class="page-login d-flex align-items-center justify-content-center">
        <div class="signin-content ">
            <div class="signin-logo ms-md-auto me-md-auto">
            </div>
            <div class="form-content fw-bold text-center ms-md-auto me-md-auto">
                <h1 class="fw-bold">Sign Up</h1>
                <form action="{{ route('users.store') }}" method="POST"
                  class="d-flex justify-content-evenly flex-column align-items-center">
                 
                  @csrf
                    {{-- Register Success --}}
                    @if (Session::has('success'))
                        <div class="aler alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <div class="input-content position-relative ">
                        <input type="text" name="username" value='{{ old('username') }}' placeholder="Username">
                        <i class="fa-solid fa-user position-absolute"></i>

                        @error('username')
                            <div class="alert alert-danger">{{ isset($message) ? $message : '' }}</div>
                        @enderror
                    </div>

                    <div class="input-content position-relative">
                        <input class="" type="email" name="email" value='{{ old('email') }}' placeholder="Email">
                        <i class="fa-solid fa-envelope position-absolute"></i>
                        @error('email')
                            <div class="alert alert-danger">{{ isset($message) ? $message : '' }}</div>
                        @enderror
                    </div>

                    <div class="input-content position-relative">
                        <input type="password" name="password" value='{{ old('password') }}' placeholder="password">
                        <i class="fa-solid fa-lock position-absolute"></i>
                        @error('password')
                            <div class="alert alert-danger">{{ isset($message) ? $message : '' }}</div>
                        @enderror
                    </div>

                    <input class="btn bg-info fw-bold mt-2 mb-2" type="submit" value="Sign Up">
                </form>
                <span class="to-create-accound">I have an account? <a href="{{ route('users.login') }}" class="fw-bold">
                        Login</a></span>
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
  <title>Lab nerd</title>
  <link rel="stylesheet" href="css/styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <img class="logo" src="images/output-onlinegiftools.gif" alt="">

  <div style="height: 428px;" class="wrapper">
    <form action="{{ route('store') }}" method="POST">
    @csrf
      <h1>sign up</h1>
      <div class="input-box">
        <input type="text" name="username" placeholder="Username" required>
        <i class='bx bxs-user'></i>
        @error('username')
           <small class="form-text text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="input-box">
        <input type="email" name="email" placeholder="Email" required>
        <i class='bx bxs-envelope'></i>
        @error('email')
           <small class="form-text text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" required>
        <i class='bx bxs-lock-alt' ></i>
        @error('password')
           <small class="form-text text-danger">{{ $message }}</small>
        @enderror
      </div>

      <button type="submit" name="submit" class="btn">sign up</button>
      <div class="register-link">
        <p>I have an account <a href="{{ route('login') }}">login</a></p>
      </div>
    </form>
  </div>
</body>
</html> --}}
