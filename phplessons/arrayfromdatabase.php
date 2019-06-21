<?php
include_once 'includes/dbtestsystem.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>From database into array</title>
</head>

<body>
    <?php
    // semi-colon inside string for sql command & semi-colon outside for php statement
    $sql = "SELECT * FROM data;";
    $result = mysqli_query($conn, $sql);
    $datas = array();
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
        }
    }
    // print_r($datas);

    foreach ($datas as $data) {
        echo $data['text'] . " ";
    }
    ?>

</body>

</html>