<?php

include 'dashboard.php';
?>
<div class="maincontent">

    <body>
        <?php
        // if (isset($_SESSION['update'])) {
        //     echo $_SESSION['update'];
        // }

        ?>
        <table class="styledtable">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>USN</th>
                    <th>Name</th>
                    <th>Branch</th>
                    <th>Hostel</th>
                    <th>Sem</th>
                    <th>Mobile No</th>
                    <th>Modify</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php

                // include 'config.php';
                $squerry = " select s.usn,h.hostelname,s.name,s.branch,s.sem,s.mobileno from student as s,hostel as h where s.hostelid=h.hostelid";
                // $squerry = "select * from student";
                $result = mysqli_query($conn, $squerry);
                if ($result) {
                    // echo "querry executed successfully";
                    $count = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $count ?></td>
                            <td><?php echo $row['usn']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['branch']; ?></td>
                            <td><?php echo $row['hostelname']; ?></td>
                            <td><?php echo $row['sem']; ?></td>
                            <td><?php echo $row['mobileno']; ?></td>
                            <td><a href="dashboardedit.php?id=<?php echo $row['usn']; ?>" onclick=''><img src="icons/edit-solid.svg"></a></td>
                            <td><a href="alerting.php?id=<?php echo $row['usn']; ?>"><img src="icons/trash-alt-solid.svg"></a></td>

                        </tr>
                <?php
                        $count++;
                    }
                } ?>


            </tbody>
        </table>


</div>
</div>
</body>

</html>