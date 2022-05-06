<?php
// session_start();
include "config.php";

$username = $_POST['username'];
$pasword = $_POST['password'];
// echo "<br>username:" . $username;
// echo "<br>password:" . $pasword;



$userpassquerry = "select * from admin where Name='$username' and password='$pasword'";
$result = mysqli_query($conn, $userpassquerry);
echo "querrry successful";

$row = mysqli_fetch_array($result);

if ($row['Name'] == $username && $row['password'] == $pasword) {


    $_SESSION['username'] = $row['Name'];
    $_SESSION['password'] = $row['password'];
    // echo "<br> :" . $_SESSION['username'] . " is currenlty loged in whose usn is " . $_SESSION['password'];



    header("location:dashboarddefault.php");
} else {

    // echo "<br>Stored username" . $username . "<br>Row username:" . $row['Name'] . " and<br> Row password " . $row['password'] . " and stored password" . $pasword;
    header("location:loginerror.php");
}
