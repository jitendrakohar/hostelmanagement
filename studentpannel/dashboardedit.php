<?php
include 'config.php';
if ($_SESSION['usn'] == $_GET['id']) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // $sql = " select s.usn,h.hostelname,r.roomno,s.name,s.branch,s.sem from student as s,room as r,hostel as h where s.usn=r.usn and s.usn='$id'";
        $sql = "select * from student where usn = '$id'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            $count = mysqli_num_rows($res);
            if ($count == 1) {
                $row = mysqli_fetch_assoc($res);
                $usn = $row['usn'];
                $name = $row['name'];
                $branch = $row['branch'];
                $sem = $row['sem'];
                $phone = $row['mobileno'];
                // $roomno = $room['roomno'];
            }
        }
    }



    include 'dashboard.php';
?>
    <div class="maincontent">

        <div class="modifydiv" style="width:80vw;height:90vh;text-align:center;margin-top:60px">
            <form method="post">

                <label style="font-size: 32px;margin-bottom:15px" class="modifyinput" for="usn">usn</label><br>
                <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center;" type="text" name="usn" id="usn" value="<?php echo $usn; ?>"><br>
                <label style=" font-size: 32px;margin-bottom:15px" class="modifyinput" for="sname">Student Name</label><br>
                <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center;" type="text" name="sname" id="sname" value="<?php echo $name; ?>"><br>
                <label style="font-size: 32px;margin-bottom:15px" class="modifyinput" for="sem">sem</label><br>
                <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center;" type="text" name="sem" id="sem" value="<?php echo $sem; ?>"><br>
                <label style="font-size: 32px;margin-bottom:15px;border-radius:12px" for="branch">Branch</label><br>
                <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center;" type="text" name="branch" id="branch" value="<?php echo $branch; ?>"><br>
                <label style="font-size: 32px;margin-bottom:15px;border-radius:12px" for="vphoneno">visitor phone :</label><br>
                <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center;" type="number" name="vphoneno" id="vphoneno" value="<?php echo $phone; ?>"><br>
                <button style="font-size: 25px;margin-bottom:15px;border-radius:10px" type="submit" value="submit" name="submit">modify </button>

            </form>
        </div>
        </body>

        </html>

    <?php
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {
        $usn = $_POST['usn'];
        $name = $_POST['sname'];
        $branch = $_POST['branch'];
        $phone = $_POST['vphoneno'];
        $sql = "update student set usn = '$usn' , name = '$name', branch = '$branch' ,sem = '$sem',mobileno ='$phone' where usn = '$id'";

        if ($res = mysqli_query($conn, $sql)) {
            echo "<script>alert('You have modified your data.');
            window.location.href='dashboarddefault.php';</script>";
            // header('location:dashboarddefault.php');
        } else {
            echo "Failed";
        }
    }
} else {
    echo "<script>window.alert('You are trying to edit other people data');</script>";
}
    ?>