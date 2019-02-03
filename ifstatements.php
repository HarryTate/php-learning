<?php
include 'header.php';

$isMale = true;
$isTall = true;

if ($isMale && $isTall){
    echo "You are male and Tall";
} elseif ($isMale && !$isTall) {
    echo "You are male and not tall";
} elseif (!$isMale && !$isTall){
    echo "You are not male or and you are not tall";
} elseif (!$isMale && $isTall){
    echo "You are not male and you are tall";
} else {
    echo "error";
}
?>
<br>
<?php
function getMax($num1,$num2) {
    if($num1 > $num2){
        echo "Number 1 is greater";
    } elseif($num2 > $num1){
        echo "Number 2 is greater than number 1";
    } else {
        echo "Numbers are equal";
    }
}
getMax(1,1);



?>
</body>
</html>