<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login page</title>
  <link rel="stylesheet" href="style.css" />
<!--   <script type="text/javascript">
      function displayTime() {
        document.getElementById('digit-clock').innerHTML = "Current time:" + new Date();
      }
      setInterval(displayTime,500);
  </script> -->
</head>
<body>
  <div class="form">
  <h1>Log In</h1>
  <div id="digit-clock"></div>  
<?php
  //some code here
  echo "Visited time: " . date("Y-m-d h:i:sa")
?>
  <form action="index.php" method="POST" class="form login">
   <input type="text" class="input_field" name="username" placeholder="Username" required /> <br>
      <input type="password" class="input_field" name="password" placeholder="Password" required /> <br>
      <button class="button" type="submit">Login</button>
  </form>
  <p>Not registered yet? <a href='registrationform.php'>Register Here</a></p>
</body>
</html>


