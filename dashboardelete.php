<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;
    // $sql = " select s.usn,h.hostelname,r.roomno,s.name,s.branch,s.sem from student as s,room as r,hostel as h where s.usn=r.usn";
    $sql = "delete from student where  usn = '$id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {

        header("location:dashboarddefault.php");
    }
}
