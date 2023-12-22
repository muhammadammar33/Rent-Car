<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Car Dealership</title>
  <link rel="stylesheet" href="CSS/rac.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  {{-- <script src="JS/rac.js"></script> --}}
  <?php
    // if(isset($_POST["text-input"]) && isset($_POST["text-input"]))
    // {
        
    // $name = $_POST["loginUsername"];
    // $pwd = $_POST["loginPassword"];
    // if($name === 'user' && $pwd === 'password')
    // {
    //     header("Location: index.php");
    //     exit();
    // }
    // else
    // {
    //     echo("invalid");
    // }
    // }

    ?>
</head>
<body>
<div class="wrapper">
  <div class="login_box">
    <div class="login-header">
      <span>Login</span>
    </div>
    
    <form {{--onsubmit="Lvalidate()"--}} action="{{ route('checkClient') }}" method="POST">
      @csrf
      <div class="input_box">
        <input class="input-field" type="text" id="loginUsername" name="loginUsername" required>
        <label class="label" for="loginUsername">Username</label>
        <i class='bx bx-user icon'></i>
      </div>

      <div class="input_box">
        <input class="input-field" type="password" id="loginPassword" name="loginPassword" required>
        <label class="label" for="loginPassword">Password</label>
        <i class='bx bx-lock-alt icon'></i>
      </div>
      
      <div class="remember-forgot">
        <div class="remember-me">
          <input type="checkbox" id="remember">
          <label for="remember">Remember me</label>
        </div>

        <div class="forgot">
          <a href="#">Forgot password?</a>
        </div>
      </div>

      <div class="input_box">
        <input type="submit" class="input-submit" value="Login" onclick="Lvalidate()">
      </div>
    </form>
    <div class="signup">
      <span>Not a member? <a href="racsignup">Sign Up</a></span>
    </div>
  </div>
</div>

{{-- <script src="JS/rac.js"></script> --}}

</body>
</html>
