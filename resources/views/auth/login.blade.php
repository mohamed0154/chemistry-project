@extends('sharing.master')
@section('content')
    <div class="page-login d-flex align-items-center justify-content-center">
        <div class="signin-content ">
            <div class="signin-logo ms-md-auto me-md-auto">
            </div>
            <div class="form-content fw-bold text-center ms-md-auto me-md-auto">
                <h1 class="fw-bold">login in lab nerd</h1>
                <form action="{{ route('user.login') }}" method="POST"
                    class="d-flex justify-content-evenly flex-column align-items-center">
                    @csrf
                    @if (Session::has('success'))
                        <div class="aler alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="input-content position-relative ">
                        <input class="" type="email" name="email" placeholder="Email">
                        <i class="fa-solid fa-envelope position-absolute"></i>
                        @error('email')
                            <div class="alert alert-danger">{{ isset($message) ? $message : '' }}</div>
                        @enderror
                    </div>
                    <div class="input-content position-relative">
                        <input type="password" name="password" placeholder="password">
                        <i class="fa-solid fa-lock position-absolute"></i>
                        @error('password')
                            <div class="alert alert-danger">{{ isset($message) ? $message : '' }}</div>
                        @enderror
                    </div>
                    <div class="setting d-flex justify-content-between">
                        <div class="remember-me ">
                            <input type="checkbox" name="remeber_me"{{ old('remember_me') ? 'checked' : '' }}>
                            <label for="">remeber me</label>
                        </div>
                        <a href="{{ route('forget_pass') }}"> forget password</a>
                    </div>
                    <input class="btn bg-info fw-bold" type="submit" value="login">
                </form>
                <span class="to-create-accound">Dont have an account? <a href="{{ route('sign_up_view') }}" class="fw-bold">
                        Register</a></span>
            </div>
        </div>
    </div>



    {{-- <img class="logo" src="images/output-onlinegiftools.gif" alt=""> --}}
    {{-- <div class="wrapper">

        @if (Session::has('success'))
            <div class="aler alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <form action="{{ route('user.login') }}" method="POST">
            @csrf
            <h1>Log in lab nerd</h1>
            <div class="input-box">
                <input type="email" placeholder="email" name="email" required>
                <i class='bx bxs-user'></i>
                @error('email')
                    <div class="alert alert-danger">{{ isset($message) ? $message : '' }}</div>
                @enderror
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
                @error('password')
                    <small class="form-text text-danger">{{ isset($message) ? $message : '' }}</small>
                @enderror
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" name='remember_me' value="remember_me" id="keep-me-logged-in"
                        {{ old('remember_me') ? 'checked' : '' }}>Remember Me</label>
                <a href="{{ route('forget_pass') }}">Forgot Password</a>
            </div>
            <a href="./Welcome To Lab_Nerd"><a><button type="submit" class="btn">Login</button></a>

                <div class="register-link">
                    <p>Dont have an account? <a href="{{ route('sign_up_view') }}">Register</a></p>
                </div>
        </form>
    </div> --}}
@stop
