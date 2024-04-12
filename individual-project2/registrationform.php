<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="style.css" />
 <!--  <script type="text/javascript">
      function displayTime() {
        document.getElementById('digit-clock').innerHTML = "Current time:" + new Date();
      }
      setInterval(displayTime,500);
  </script> -->
</head>
<body>
  <div class="form">
  <h1>New User Registration</h1>
  <div id="digit-clock"></div>  
<?php
  //some code here
  echo "Visited time: " . date("Y-m-d h:i:sa")
?>


  <form action="addnewuser.php" method="POST" class="form login">
    <input type="text" class="input_field" name="username" Placeholder="Username" required pattern="\w+" title="Please enter a valid username" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');"/> <br>
    <input type="password" class="input_field" name="password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&])[a-zA-Z0-9!@#$%^&]{8,}$" placeholder="Your password" title="Password must have at least 8 characters with 1 special symbol !@#$%^&amp;, 1 number, 1 lowercase, and 1 UPPERCASE" onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: ''); form.repassword.pattern = this.value;"/> <br>
    <input type="text" class="input_field" name="fullname" placeholder="Full name" required/> <br>
    <input type="email" class="input_field" name="email" required pattern="^[\w.-]+@[\w-]+(\.[\w-]+)*$" title="Please enter a valid email" placeholder="Your email address" onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/> <br>
    <input type="tel" id="phone" name="phone" class="input_field" placeholder="Enter your phone number" required pattern="[0-9]{10}" title="Please enter a valid phone number"/> <br>
    <button class="button" type="submit">Register</button>
</form>

</div>
</body>
</html>
