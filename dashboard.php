<?php
include "config.php";
// session_start();
if (isset($_SESSION['username'])) {
    // echo  $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/tablestyle.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <style>
        .logoutsection {
            display: none;
            border-radius: 6px;
            box-shadow: 2px 2px 2px 1px gray;
        }

        .logheader:hover+.logoutsection {
            display: block;
            background-color: skyblue;
            transition-delay: 10s;
        }

        .logoutsection:hover {
            background-color: skyblue;
            display: block;
        }

        .logoutsection li {

            margin-top: 10PX;
            list-style: none;
        }

        .mainsection {

            display: inline-flex;
            height: 88vh;

        }

        .aside {
            width: 13vw;
            height: 100%;
            text-align: center;
        }

        .maincontent {
            /* background-color: bisque; */
            width: 87vw;
            height: 100%;
            overflow: scroll;
        }
    </style>
</head>

<body>
    <div class="header">
        <h3>HOSTEL MANAGEMENT SYSTEM</h3>
        <div class="logheader" style="position:absolute;right:40px;top:5px;width: 40px;height:40px;border-radius:12px" id="logout1" onclick=""><img src="admin.png" width="40px" height="40px" style="display:flex">
            <?php echo $_SESSION['username']  ?>
        </div>
        <div class="logoutsection" id="logout" style="position: absolute;top:63px;right:10px;">
            <li><b style="margin-bottom:8px;">ADMIN</b></li>
            <li><?php echo $_SESSION['username']  ?></li>
            <li style="width:98px"><a href="logout.php" style="text-decoration:none;width:100%;font-size:22px;">logout</a></li>
        </div>
    </div>
    <div class="mainsection">
        <div class="aside">
            <ul class="sideiconsbar">
                <li><a href="dashboarddefault.php" onclick=""><img src="icons/tachometer-alt-solid.svg"><br>DASHBOARD</a></li>
                <li><a href="visitor.php"><img src="icons/hiking-solid.svg"><br>VISITORS</a></li>
                <li><a href="room.php"><img src="icons/house-user-solid.svg"><br>ROOMS</a></li>
                <li><a href="department.php"><img src="icons/book-reader-solid.svg"><br>department</a></li>
                <li><a href="FoodComplain.php"><img src="icons/id-card-solid.svg"><br>Food Complain</a></li>
                <!-- <li><a href="logout.php"><img src="icons/logout.png"><br>Log out </a></li> -->

            </ul>
        </div>