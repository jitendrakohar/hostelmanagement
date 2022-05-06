<?php
include '../config.php';
$queryvisitor = "truncate visitor";
if (mysqli_query($conn, $queryvisitor)) {
    echo "<script>window.alert('You have deleted the table successfully');</script>";
    header('location:../visitor.php');
}
