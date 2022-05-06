<?php
// session_start();
// if (isset($_SESSION['username'])) {
//     header("location:Student-login.html");
//     session_destroy();
// }

session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
if (!isset($_SESSION["username"]) || !$_SESSION["password"]) {
    header("Location:Student-login.html");
}
