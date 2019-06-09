<?php
include 'header.php';

$luckyNumbers = array(4, 8, 10, 11, 15);
for ($i = 0; $i < count($luckyNumbers); $i++) {
    echo "$luckyNumbers[$i] <br>";
}

$members = array("Jerry", "Phillip", "Peter", "Clive", "Jamie", "Gareth", "Mark");
echo "<h2>Current Members are:</h2> <ol>";
for ($i = 0; $i < count($members); $i++) {
    echo "<li>" . $members[$i] . "</li>";
}
echo "</ol>";
?>


</body>

</html>