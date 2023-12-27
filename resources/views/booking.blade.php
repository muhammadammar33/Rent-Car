<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
  <link rel="stylesheet" href="CSS/rac.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body >
<div class="wrapper">
  <div class="login_box">
    <div class="login-header">
      <span>Booking</span>
    </div>
    <form {{--onsubmit="validate()"--}} action="{{ route('addBooking') }}" method="POST">
      @csrf
      <div class="input_box">
        <input class="input-field" type="text" id="signupEmail" name="make" required value="{{ $car->Make }}">
        <label class="label" for="signupEmail">Make</label>
        <i class='bx bx-envelope icon'></i>
      </div>

      <div class="input_box">
        <input class="input-field" type="text" id="signupEmail" name="model" required value="{{ $car->Model }}">
        <label class="label" for="signupEmail">Model</label>
        <i class='bx bx-envelope icon'></i>
      </div>

      <div class="input_box">
        <input class="input-field" type="date" id="signupPhone" name="date" required>
        <label class="label" for="signupPhone">Date</label>
        <i class='bx bx-phone icon'></i>
      </div>

      <div class="input_box">
        <input class="input-field" type="number" id="signupCNIC" name="days" required>
        <label class="label" for="signupCNIC">Number of Days</label>
        <i class='bx bx-universal-access icon'></i>
      </div>

      <div class="input_box">
        <input class="input-field" type="text" id="signupUsername" name="paymentmethod" required>
        <label class="label" for="signupUsername">Payment Method (Cash/Online)</label>
        <i class='bx bx-user icon'></i>
      </div>

      <div class="input_box">
        <input type="submit" class="input-submit" value="Book" onclick="validate()">
      </div>
      <div class="signup">
        <span>Online Payment Details: 03267744260</span>
      </div>
    </form>
  </div>
</div>

<script src="JS/paymentdetails.js"></script>

</body>
</html>
