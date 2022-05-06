<?php
// session_start();
include "config.php";

$usns = $_POST['lusername'];
$password = $_POST['lpassword'];


// $userpassquerry = "select * from login where usn='$username' and password='$password'";
// $result = mysqli_query($conn, $userpassquerry);
// $row = mysqli_fetch_assoc($result);

// $querryusername = mysqli_query($conn, "select s.name from student s where s.usn='$usn'");

// $namerows = mysqli_fetch_row($querryusername);

//checking whether it is taking a login username or password
// echo "login username:" . $usns . " login password:" . $password;


$userpassquerry = " select s.name,l.usn,l.password from student s,login l where l.usn='$usns' and s.usn='$usns' limit 1";
$result = mysqli_query($conn, $userpassquerry);
$row = mysqli_fetch_array($result);

if ($row['usn'] == $usns && $row['password'] == $password) {


    echo "<br>THE session is executing";
    $_SESSION['username'] = $row['name'];
    $_SESSION['password'] = $row['password'];
    echo "<br> :" . $_SESSION['username'] . " is currenlty loged in whose usn is " . $_SESSION['password'];


    // $_SESSION['name'] = $namerows['name'];
    // echo $_SESSION['name'];
    // $_SESSION['password'] = $password;
    header("location:dashboarddefault.php");
} else {
    // echo "<script>window.alert('your have entered incorrect username & Password')</script>";
    // $_SESSION["login-fail"] = "<p>Login FAiled</p>";
    header("location:loginerror.php");
}
