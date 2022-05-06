<?php
// include 'config.php';
include "dashboard.php";



// $sql = " select s.usn,h.hostelname,r.roomno,s.name,s.branch,s.sem from student as s,room as r,hostel as h where s.usn=r.usn";
// $sql = "select * from department";
// $res = mysqli_query($conn, $sql);

// if ($res) {
//     $count = mysqli_num_rows($res);
//     $row = mysqli_fetch_assoc($res);

//     // echo $usn;
//     if ($count >= 1) {

//         $usn = $row['usn'];
//         echo $usn;
//     }
// }

?>
<div class="maincontent">

    <body>
        <table class="styledtable">
            <thead>


                <tr>
                    <th>S.N</th>
                    <th>department</th>
                    <th>NO_Of_Boys</th>
                    <th>No_Of_Girls</th>
                    <th>Modify</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "select * from department";

                $result = mysqli_query($conn, $sql);
                $count = 1;
                while ($rows = mysqli_fetch_assoc($result)) {


                ?>
                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $rows['branch']; ?></td>
                        <td><?php echo $rows['Boys']; ?></td>
                        <td><?php echo $rows['Girls']; ?></td>
                        <td><a href="alerting.php"><img src="icons/edit-solid.svg"></a></td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>


</div>
</div>
</body>

</html>