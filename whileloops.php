<?php
include 'header.php';

// do while loops excutes code first once even if condition isn't met
$index = 6;
do {
    echo "$index <br>";
    $index++;
} while ($index <= 5);

$number = 1;
while ($number <= 5) {
    echo "$number <br>";
    $number++;
}
$counter = 0;
$super = array("Terry", "Phillip", "Jacob", "Albert", "Graham");
$superCount = count($super);

while ($counter <= $superCount) {
    echo implode(" ", $super) . "<br>";
    $counter++;
}
?>


</body>

</html>