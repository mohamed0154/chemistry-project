
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
    <form action="{{ route('ensure_email') }}" method="POST">
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

</html>
