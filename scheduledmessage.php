<?php include 'header.php';
// Great resource for date format in php
// https://www.w3schools.com/php/func_date_date.asp


$dayofweek = date("w");

switch ($dayofweek) {
    case 0:
        echo "Sunday";
        break;
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
}
?>


<?php include 'footer.php'; ?>

