<?php
include 'config.php';


if ($_SESSION['usn'] == $_GET['id']) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // $sql = " select s.usn,h.hostelname,r.roomno,s.name,s.branch,s.sem from student as s,room as r,hostel as h where s.usn=r.usn";
        $sql = " select r.usn,r.roomno,r.seater,s.name from student s, room r where s.usn=r.usn and r.usn='$id'";

        $res = mysqli_query($conn, $sql);
        if ($res) {
            $count = mysqli_num_rows($res);
            if ($count == 1) {
                $row = mysqli_fetch_assoc($res);
                $usn = $row['usn'];
                $name = $row['name'];
                $roomnumber = $row['roomno'];
                $seater = $row['seater'];
            }
        }
    }



    include 'dashboard.php';
?>
    <div class="maincontent">

        <div class="modifydiv" style="width:80vw;height:90vh;text-align:center;margin-top:60px">
            <form method="post">

                <label style="font-size: 32px;margin-bottom:15px" class="modifyinput" for="usn">USN</label><br>
                <input style="font-size: 32px;margin-bottom:15px;text-align:center;border-radius:12px;padding:5px" type="text" name="usn" id="usn" value="<?php echo $usn; ?>"><br>
                <label style=" font-size: 32px;margin-bottom:15px" class="modifyinput" for="roomno">Room No:</label><br>
                <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;text-align:center;padding:5px" type="text" name="roomno" id="roomno" value="<?php echo $roomnumber; ?>"><br>
                <label style="font-size: 32px;margin-bottom:15px" class="modifyinput" for="seater">Seater</label><br>
                <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;padding:5px;text-align:center;" type="text" name="seater" id="seater" value="<?php echo $seater; ?>"><br>
                <!-- <label style="font-size: 32px;margin-bottom:15px;border-radius:12px" for="branch">Branch</label><br>
            <input style="font-size: 32px;margin-bottom:15px;border-radius:12px" type="text" name="branch" id="branch" value="
              -->
                <label style="font-size: 32px;margin-bottom:15px;border-radius:12px;padding:5px;text-align:center" for="sname">Name :</label><br>
                <input style="font-size: 32px;margin-bottom:15px;border-radius:12px;padding:5px;text-align:center" type="text" name="name" id="sname" value="<?php echo $name; ?>"><br>


                <button style="font-size: 25px;margin-bottom:15px;border-radius:10px" type="submit" value="submit" name="submit">modify </button>




            </form>
        </div>
        </body>

        </html>
    <?php
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {
        $usn = $_POST['usn'];
        $roomno = $_POST['roomno'];
        $seater = $_POST['seater'];
        // echo $usn;
        // echo $roomno;
        // echo $seater;

        $sql = "update room set usn = '$usn' , roomno = '$roomno', seater ='$seater' where usn = '$id'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            // $_SESSION['update'] = "<p>update Successfully</p>";
            // echo "hello";
            // header("location:room.php");
            echo "<script>alert('You successfully updated  your room data.');
            window.location.href='room.php';</script>";
        }
    }
} else {

    echo "<script>window.alert('you are trying to change other people data')</script>";
}
    ?>