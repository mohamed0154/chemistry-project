@extends('sharing.master')

@section('title','login')

@section('content')
    <div class="page-login d-flex align-items-center justify-content-center">
        <div class="signin-content ">
            <div class="signin-logo ms-md-auto me-md-auto">
            </div>
            <div class="form-content fw-bold text-center ms-md-auto me-md-auto">
                <h1 class="fw-bold">login in lab nerd</h1>
                <form action="{{ route('users.auth') }}" method="POST"
                    class="d-flex justify-content-evenly flex-column align-items-center">
                    @csrf
                    @if (Session::has('success'))
                        <div class="aler alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @elseif (Session::has('failed'))
                      <div class="aler alert-danger">
                            {{ Session::get('failed') }}
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
                        <a href="{{ route('users.forget_pass') }}"> forget password</a>
                    </div>
                    <input class="btn bg-info fw-bold" type="submit" value="login">
                </form>
                <span class="to-create-accound">Dont have an account? <a href="{{ route('users.sign_up_view') }}" class="fw-bold">
                        Register</a></span>
            </div>
        </div>
    </div>

