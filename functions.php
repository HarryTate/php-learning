<?php
include 'header.php';


function sayHi($name)
{
    echo "Hello $name <br>";
}
$character = "James";
sayHi($character);

function cube($num)
{
    return $num * $num * $num;
}
echo cube(4) . "<br>";


function stringConcat($string1, $string2, $string3)
{
    return $string1 . $string2 . $string3;
}
echo stringConcat("Build ", " me ", "a sentence");

?>
</body>

</html>