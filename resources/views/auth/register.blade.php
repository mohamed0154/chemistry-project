
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
</html>
