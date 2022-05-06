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

    <form action="login.php" method="POST" style="background-color: rgb(163,175,187);color:blue">
      <!--  -->
      <label for="username">
        <P style="font-size:2rem;font-weight: bold;">Username:</P>
      </label>
      <input type="text" width="20px" style="border-radius:10px;background-color:rgb(220,221,225)" class="inputform" name="username" id="username" required="required" />
      <br>
      <label for="password">
        <P style="font-size:2rem;font-weight: bold;">Password:</P>
      </label>
      <input type="password" class="inputform" style="border-radius:10px;background-color:rgb(220,221,225)" name="password" id="password" required="required " />
      <br><button type="submit" class="button" style="background-color:seagreen;">Login</button><br><br>


      <a class="logina" href="studentpannel/Student-login.html" style="color: blue;">Login As Student</a><br>

    </form>

  </div>

</body>

</html>