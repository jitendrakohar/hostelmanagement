<?php
include 'dashboard.php';
?>
<div class="maincontent">

    <div class="modifydiv" style="width:80vw;height:90vh;text-align:center;margin-top:60px">
        <form method="post" action="add.php">

            <label style="font-size: 32px;margin-bottom:15px" class="modifyinput" for="usn">usn</label><br>
            <input style="font-size: 32px;margin-bottom:15px;border-radius:12px" type="text" name="usn" id="usn"><br>
            <label style="font-size: 32px;margin-bottom:15px" class="modifyinput" for="sname">Student Name</label><br>
            <input style="font-size: 32px;margin-bottom:15px;border-radius:12px" type="text" name="sname" id="sname"><br>
            <label style="font-size: 32px;margin-bottom:15px" class="modifyinput" for="vname">Visitor Name</label><br>
            <input style="font-size: 32px;margin-bottom:15px;border-radius:12px" type="text" name="vname" id="vname"><br>
            <label style="font-size: 32px;margin-bottom:15px;border-radius:12px" for="relation">Relation</label><br>
            <input style="font-size: 32px;margin-bottom:15px;border-radius:12px" type="text" name="relation" id="relation"><br>
            <label style="font-size: 32px;margin-bottom:15px;border-radius:12px" for="vphoneno">visitor phone :</label><br>
            <input style="font-size: 32px;margin-bottom:15px;border-radius:12px" type="number" name="vphoneno" id="vphoneno"><br>
            <button style="font-size: 25px;margin-bottom:15px;border-radius:10px" type="submit" value="submit" name="submit">Submit The form </button>




        </form>
    </div>
    </body>

    </html>