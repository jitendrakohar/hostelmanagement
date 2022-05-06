<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "hostelers";
$conn = mysqli_connect($servername, $username, "", $database);
//checking the connection
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
