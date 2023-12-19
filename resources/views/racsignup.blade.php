<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - Car Dealership</title>
  <link rel="stylesheet" href="CSS/rac.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="JS/rac.js"></script>
  <?php
    if(isset($_POST["text-input"]) && isset($_POST["text-input"]))
    {
        
    $name = $_POST["signupName"];
    $email = $_POST["signupEmail"];
    $phonenumber = $_POST["signupPhone"];
    $cnic = $_POST["signupCNIC"];
    $dob = $_POST["signupDOB"];
    $username = $_POST["signupUsername"];
    $pwd = $_POST["signupPassword"];
    // if($name === 'user' && $pwd === 'password')
    // {
    //     header("Location: index.php");
    //     exit();
    // }
    // else
    // {
    //     echo("invalid");
    // }
    }

    ?>
</head>
<body >
<div class="wrapper">
  <div class="login_box">
    <div class="login-header">
      <span>Sign Up</span>
    </div>
    
    <form onsubmit="validate()">

      <div class="input_box">
        <input class="input-field" type="email" id="signupEmail" name="signupEmail" required>
        <label class="label" for="signupEmail">Email</label>
        <i class='bx bx-envelope icon'></i>
      </div>

      <div class="input_box">
        <input class="input-field" type="tel" id="signupPhone" name="signupPhone" required>
        <label class="label" for="signupPhone">Phone Number</label>
        <i class='bx bx-phone icon'></i>
      </div>

      <div class="input_box">
        <input class="input-field" type="text" id="signupCNIC" name="signupCNIC" required>
        <label class="label" for="signupCNIC">CNIC Number</label>
        <i class='bx bx-universal-access icon'></i>
      </div>

      <div class="input_box">
        <input class="input-field" type="text" id="signupUsername" name="signupUsername" required>
        <label class="label" for="signupUsername">Username</label>
        <i class='bx bx-user icon'></i>
      </div>

      <div class="input_box">
        <input class="input-field" type="password" id="signupPassword" name="signupPassword" required>
        <label class="label" for="signupPassword">Password</label>
        <i class='bx bx-lock-alt icon'></i>
      </div>

      <div class="input_box">
        <input type="submit" class="input-submit" value="Signup" onclick="validate()">
      </div>
    </form>
    <div class="signup">
      <span>Already have an account? <a href="raclogin">Login</a></span>
    </div>
  </div>
</div>

<script src="JS/rac.js"></script>

</body>
</html>
