<!-- 
session_start();
include "config.php";
$userpassquerry = "select * from login where usn='$username' and password='$password'";
$result = mysqli_query($conn, $userpassquerry);
$row = mysqli_fetch_assoc($result);

$querryusername = mysqli_query($conn, "select s.name from student s where s.usn='$usn'");
 if (isset($_SESSION['id'])) {
                echo $_SESSION['id'];
            } else {
                echo "error.";
            }  -->
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
echo $_SESSION['username'] . "  and " . $_SESSION['password'];
?>

<body>

</body>

</html>