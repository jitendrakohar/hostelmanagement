<?php
include '../config.php';
$usn = $_POST['usn'];
$sname = $_POST['sname'];
$vname = $_POST['vname'];
$relation = $_POST['relation'];
$vphoneno = $_POST['vphoneno'];

$queryvisitor = "insert into visitor(usn,studentname,visitorname,relation,visitorphoneno) values('$usn','$sname','$vname','$relation','$vphoneno')";
if (mysqli_query($conn, $queryvisitor)) {
    echo "usn" . $usn . "sname" . $sname . "vname:" . $vname . "relation:" . $relation . "vphoneno" . $vphoneno;
    $_SESSION['querryinserted'] = "Insertion successfully";
    header("location:../visitor.php");
} else {
    echo "<script>alert('Please enter usn and name of the visitor correctly.');
            window.location.href='../visitor.php';</script>";
}
