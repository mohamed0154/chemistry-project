
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
  <div class="wrapper">

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
          <div class="alert alert-danger">{{isset($message)?$message:''}}</div>
        @enderror
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
        @error('password')
            <small class="form-text text-danger">{{isset($message)?$message:''}}</small>
        @enderror
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox" name='remember_me' value="remember_me" id="keep-me-logged-in" {{ old('remember_me') ? 'checked' : '' }}>Remember Me</label>
        <a href="{{ route('forget_pass') }}">Forgot Password</a>
      </div>
     <a href="./Welcome To Lab_Nerd" ><a><button type="submit" class="btn">Login</button></a>

      <div class="register-link">
        <p>Dont have an account? <a href="{{ route('sign_up_view') }}">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>
