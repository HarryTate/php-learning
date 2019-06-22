<?php
include 'header.php';

$friends = array("Kevin", "Karen", "Oscar", "Jim");
//  Change value of array element
$friends[3] = array("Jake");
//  Return one value of array
echo $friends[2] .  "<br>";
//  Add element to array
$friends[4] = "Phil";
//  Count how many elements in array
echo count($friends);

echo $friends[4];

?>
</body>

</html>