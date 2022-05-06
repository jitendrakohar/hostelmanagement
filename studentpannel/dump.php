<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checking whether script works or not</title>
</head>

<body>
    hello everybody

    <?php
    include 'config.php';
    $sql = "select * from login where usn='1bh19cs034'";
    $checkingthequerry = mysqli_query($conn, $sql);
    if (($result = mysqli_num_rows($checkingthequerry)) == 0) {
        echo "querry executed";
        echo "The number of the rows of the data present is :" . $result;
    }

    ?>

</body>

</html>