<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login form</title>
  <link rel="stylesheet" type="text/css" href="css/admin-logins.css">
</head>

<body>
  <div class="bannerimage"></div>
  <div class="login-form">
    <h1>LOG IN AS ADMIN</h1>

    <?php

    // if (!isset($_SESSION['login-fail'])) {
    //   echo $_SESSION['login-fail'];

    ?>

    <form>
      <!--  -->
      <label>
        <P style="font-size:2rem;font-weight: bold;">USN:</P>
      </label>
      <input type="text" width="20px" class="inputform" name="username" placeholder="Username" required="required" />
      <br>
      <label>
        <P style="font-size:2rem;font-weight: bold;">Password:</P>
      </label>
      <input type="password" class="inputform" name="Password" Placeholder="Password" required />
      <br><button type="button" class="button" style="background-color:seagreen;"><a href="#">Login</a></button><br><br>
      <a class="logina" href="Student-login.html" style="color: blue;">Login As Student</a><br>
      <!-- <li style="list-style:none;font-size: 20px;text-decoration: none;padding-top: 15px;">Don't have any account?</li>
             
                    <a  href="#" style="font-size: 20px;text-decoration: none;padding-bottom: 14px;"> Sign Up Now as a student</a>
                  -->
    </form>

  </div>

</body>

</html>