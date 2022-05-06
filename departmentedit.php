<?php
include 'dashboard.php';
// include 'config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // $sql = " select s.usn,h.hostelname,r.roomno,s.name,s.branch,s.sem from student as s,room as r,hostel as h where s.usn=r.usn";
    $sql = "select * from department where branch = '$id'";
    if ($res = mysqli_query($conn, $sql)) {

        $count = mysqli_num_rows($res);
        if ($count == 1) {
            $row = mysqli_fetch_array($res);
            $departmentid = $row['departmentid'];

            $branch = $row['branch'];

            $Boys = $row['Boys'];

            $Girls = $row['Girls'];
        }
    } else {
        echo "Querry not executed";
    }
}

?>
<div class="maincontent">

    <div class="modifydiv" style="width:80vw;height:90vh;text-align:center;margin-top:60px">
        <form method="post">

            <label style="font-size: 32px;margin-bottom:15px" class="modifyinput" for="departmentid">DepartmentId</label><br>
            <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center" type="text" name="departmentid" id="departmentid" value="<?php echo $departmentid; ?>"><br>
            <label style=" font-size: 32px;margin-bottom:15px" class="modifyinput" for="branch">Branch</label><br>
            <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center" type="text" name="branch" id="branch" value="<?php echo $branch; ?>"><br>
            <label style="font-size: 32px;margin-bottom:15px" class="modifyinput;" for="boys">No of Boys</label><br>
            <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center" type="text" name="boys" id="boys" value="<?php echo $Boys; ?>"><br>
            <label style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center" for="girls">No of girls</label><br>
            <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center" type="text" name="girls" id="girls" value="<?php echo $Girls; ?>"><br>
            <button style="font-size: 25px;margin-bottom:15px;border-radius:10px" type="submit" value="submit" name="submit">modify </button>

        </form>
    </div>
    </body>

    </html>

    <?php
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {
        echo $_GET['id'];
        $departmentid = $_POST['departmentid'];
        $branch = $_POST['branch'];
        $boys = $_POST['boys'];
        $girls = $_POST['girls'];
        $sql = "update department set  departmentid = '$departmentid', branch = '$branch' ,Boys = '$boys',Girls='$girls' where branch = '$id'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            $_SESSION['update'] = "<p>update Successfully</p>";
            header("location:department.php");
        } else {
            echo "Failed";
        }
    }
    ?>