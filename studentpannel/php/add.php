<?php
include '../config.php';
$usn = $_POST['usn'];
$sname = $_POST['sname'];
$vname = $_POST['vname'];
$relation = $_POST['relation'];
$vphoneno = $_POST['vphoneno'];
if (strtolower($_SESSION['username']) == strtolower($sname)) {
    echo $usn . " Name " . $sname . "visitor name" . $vname . "relation" . $relation . "visitor phone no" . $vphoneno;

    $queryvisitor = "insert into visitor(usn,studentname,visitorname,relation,visitorphoneno) values('$usn','$sname','$vname','$relation','$vphoneno')";
    if (mysqli_query($conn, $queryvisitor)) {
        echo "usn" . $usn . "sname" . $sname . "vname:" . $vname . "relation:" . $relation . "vphoneno" . $vphoneno;
        $_SESSION['querryinserted'] = "Insertion successfully";
        header("location:../visitor.php");
    } else {
        echo "<script>please print the current usn people.</script>";
        header("location:../visitor.php");
    }
} else {
    $_SESSION['warning'] = "<script>You have to give your own name to add visitor</script>";

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php echo "<script>window.alert('please enter your own usn and Name correctly');</script>" ?>
    </body>

    </html>
<?php
}
?>