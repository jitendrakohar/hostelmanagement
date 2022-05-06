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
                    <th>Student Name</th>
                    <th>Visitor Name</th>
                    <th>Relation</th>
                    <th>V.PhoneNo</th>
                    <th>Modify</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php


                $squerry = " select * from visitor";
                $result = mysqli_query($conn, $squerry);
                // if ($result) {
                //     echo "querry executed successfully";
                // }
                $count = 0;

                while ($row = mysqli_fetch_assoc($result)) {
                    $count += 1;
                ?>
                    <tr>

                        <!-- <td onclick="myfunction();"> //echo $row['usn']; ?></td> -->
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $row['usn']; ?></td>
                        <td><?php echo $row['studentname']; ?></td>
                        <td><?php echo $row['visitorname']; ?></td>
                        <td><?php echo $row['relation']; ?></td>
                        <td><?php echo $row['visitorphoneno']; ?></td>
                        <td><a href="visitoredit.php?id=<?php echo $row['usn']; ?>"><img src="icons/edit-solid.svg"></a></td>
                        <td><a href="alerting.php"><img src="icons/trash-alt-solid.svg"></a></td>

                    </tr>
                <?php  } ?>

                <!-- <?php
                        // if (isset($_SESSION['querryinserted'])) {


                        if ($_SESSION['alert']) {
                            // echo $_SESSION['edit'];
                        }

                        // 
                        ?>
                 
                    <p class="popping" style="border-radius:7px;position:absolute;left:45vw;top:120px;font-size:22px;background-color:orange" onclick=""> Querry successfully inserted</p>
                <?php  ?> -->
            </tbody>

        </table>
        <div class="wrapperbutton">
            <div class="button divAdd">

                <a style="text-decoration:none" href="addvisitor.php?id=<?php echo $_SESSION['username'] ?>"><button class="Add"> ADD VISITOR</button></a>
            </div>

            <div class="button divremove">
                <a style="text-decoration:none" href="alerting.php"><button class="remove">Remove all visitor</button></a>
            </div>
        </div>
</div>
</div>
</body>

</html>