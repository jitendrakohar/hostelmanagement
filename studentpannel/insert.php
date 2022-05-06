<?php
include "config.php";

$name = $_POST['fname'] . " " . $_POST['lname'];

$email = $_POST['mail'];

$dob = $_POST['dob'];
$mobileno = $_POST['mobileno'];
$usn = $_POST['usn'];
$semester = $_POST['semester'];
$address = $_POST['address'];
$department = $_POST['department'];
$sex = $_POST['sex'];
$roomno = $_POST['roomno'];
$noofseater = $_POST['noofseater'];
$password = $_POST['password'];
// echo "$password";
$renterpassword = $_POST['renterpass'];
$hostelid = $_POST['hostelid'];
// echo "<br>";
// echo "$hostelid $usn $name $department $semester $mobileno $sex ";
$sql = "select * from login where usn='$usn'";
$checkingthequerry = mysqli_query($conn, $sql);
$noofrow = mysqli_num_rows($checkingthequerry);
// echo "<br>" . $noofrow;
if ($noofrow == 0) {
    echo $noofrow;


    $hostelopt = $_POST['hostelopt'];
    if (!empty($name) && !empty($email) && !empty($dob) && !empty($mobileno) && !empty($usn) && !empty($semester) && !empty($address) && !empty($department) && !empty($sex) && !empty($roomno) && !empty($noofseater) && !empty($password) && !empty($renterpassword) && !empty($hostelid)) {

        // echo "executing the if statement";
        $querrydepartment = "insert into department(departmentid,branch) VALUES('1','$department')";
        // $querryhostel = "insert into hostel (hostelid,hostelname,noofstudent) values('$hostelid','$hostelopt','$noofstudent')";
        $querrylogin = "insert into login(usn,password) values('$usn','$password')";

        $querryroom = "insert into room (usn,seater,roomno) values('$usn','$noofseater','$roomno')";
        $querrystudent = "insert into student (hostelid,usn,name,branch,sem,mobileno,sex) values ('$hostelid','$usn','$name','$department','$semester','$mobileno','$sex');";
        // echo "$hostelid $usn $name $department $semester $mobileno $sex <br>";
        // if (mysqli_query($conn, $querryhostel)) {
        //     echo "querryhostel insertion successfull<br>";
        // }
        if (strtolower($department) != 'cse' || strtolower($department) != 'mce' || strtolower($department) != 'cve') {
            echo "excuting";
            if (mysqli_query($conn, $querrydepartment)) {
                // echo "querrydepartment insertion successfull<br>";
            }
        }
        $status = '0';
        if (mysqli_query($conn, $querrystudent)) {
            // echo "querrystudent insertion successfull<br>";
            $status .= '1';
            if (mysqli_query($conn, $querrylogin)) {
                // echo "querrylogin insertion successfull<br>";
                $status .= '2';
            }
            if (mysqli_query($conn, $querryroom)) {
                // echo "querryroom         insertion successfull<br>";
                $status .= '3';
            }
        }




        if ($status == "0123") {
            $_SESSION['username'] = $row['name'];
            echo "<script>alert('You have successfully create a account.');
            window.location.href='Student-login.html';</script>";
        }


        // mysqli_query($conn, $querrylogin);
        // mysqli_query($conn, $querryroom);
        // mysqli_query($conn, $querrystudent);

    }
} else {
    echo "<script>alert('You have already signup with this account.');</script>";
}


mysqli_close($conn);
