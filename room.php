<?php
include "dashboard.php";
?>
<div class="maincontent">

    <body>
        <table class="styledtable">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>USN</th>
                    <th>NAME</th>

                    <th>ROOM No</th>
                    <th>seater</th>
                    <th>modify</th>
                    <th>Delete</th>


                </tr>
            </thead>
            <tbody>

                <?php

                // include 'config.php';
                $squerry = " select r.usn,r.roomno,r.seater,s.name from student s, room r where s.usn=r.usn;";
                $result = mysqli_query($conn, $squerry);
                // if ($result) {
                //     echo "querry executed successfullys";
                // }

                // $row = mysqli_fetch_assoc($result);
                // echo $row['usn'];
                $count = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>

                        <!-- <td onclick="myfunction();"> //echo $row['usn']; ?></td> -->
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row['usn']; ?></td>
                        <td><?php echo $row['name']; ?></td>

                        <td><?php echo $row['roomno']; ?></td>
                        <td><?php echo  $row['seater']; ?></td>
                        <td><a href="roomedit.php?id=<?php echo $row['usn']; ?>"><img src="icons/edit-solid.svg"></a></td>
                        <td><a href="roomdelete.php?id=<?php echo $row['usn']; ?>"><img src="icons/trash-alt-solid.svg"></a></td>

                    </tr>
                <?php $count = $count + 1;
                } ?>


            </tbody>
        </table>


</div>
</div>
</body>

</html>