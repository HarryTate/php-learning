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

function newCalc($num1, $num2)
{
    return $num1 + $num2;
}
?>


<h2>Calc returns:</h2>
<?php
echo newCalc(24, 60);
?>
<h2>Print Red sentence function:</h2>

<?php
function printSentenceRed($sentence)
{
    ?> <h3 style='color: #e72020;'> <?php echo $sentence; ?> </h3>
<?php
}
printSentenceRed("This is the first senctence.");
printSentenceRed("This is the second senctence.");
printSentenceRed("This is the third senctence.");
printSentenceRed("This is the fourth senctence.");
printSentenceRed("More red sentences.");


?>

</body>

</html>