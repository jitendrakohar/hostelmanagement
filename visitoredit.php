<?php
// include 'config.php';
include 'dashboard.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // $sql = " select s.usn,h.hostelname,r.roomno,s.name,s.branch,s.sem from student as s,room as r,hostel as h where s.usn=r.usn";
    $sql = "select * from visitor where usn = '$id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $count = mysqli_num_rows($res);
        if ($count >= 1) {
            $row = mysqli_fetch_assoc($res);
            $usn = $row['usn'];
            $sname = $row['studentname'];
            $vname = $row['visitorname'];
            $relation = $row['relation'];
            $vphone = $row['visitorphoneno'];
        }
    }
}




?>
<div class="maincontent">

    <div class="modifydiv" style="width:80vw;height:90vh;text-align:center;margin-top:60px">
        <form method="post" action="">

            <label style="font-size: 32px;margin-bottom:15px" class="modifyinput" for="usn">usn</label><br>
            <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center" type="text" name="usn" id="usn" value="<?php echo $usn; ?>"><br>
            <label style=" font-size: 32px;margin-bottom:15px" class="modifyinput" for="sname">Student Name</label><br>
            <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center" type="text" name="sname" id="sname" value="<?php echo $sname; ?>"><br>
            <label style="font-size: 32px;margin-bottom:15px" class="modifyinput" for="vname">Visitor Name</label><br>
            <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center" type="text" name="vname" id="vname" value="<?php echo $vname; ?>"><br>
            <label style="font-size: 32px;margin-bottom:15px;border-radius:12px" for="relation">Relation</label><br>
            <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center" type="text" name="relation" id="relation" value="<?php echo $relation; ?>"><br>
            <label style="font-size: 32px;margin-bottom:15px;border-radius:12px" for="vphoneno">visitor phone :</label><br>
            <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center" type="number" name="vphoneno" id="vphoneno" value="<?php echo $vphone; ?>"><br>
            <button style="font-size: 25px;margin-bottom:15px;border-radius:10px" type="submit" value="submit" name="submit">modify </button>

        </form>
    </div>
    </body>

    </html>

    <?php
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {
        $usn = $_POST['usn'];
        $sname = $_POST['sname'];
        $vname = $_POST['vname'];
        $relation = $_POST['relation'];
        $phone = $_POST['vphoneno'];
        $sql = "update visitor set usn = '$usn' , studentname = '$sname',visitorname='$vname',relation='$relation',visitorphoneno ='$phone' where usn = '$id'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            // $_SESSION['update'] = "<p>update Successfully</p>";
            // echo "hello";
            echo "<script>alert('You have successfully modified your data');
            window.location.href='visitor.php';
            </script>";
            header("location:visitor.php");
        } else {
            echo "Failed";
        }
    }
