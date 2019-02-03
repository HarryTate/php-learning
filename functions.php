<?php 
include 'header.php';


    function sayHi($name){
        echo "Hello $name <br>";
    }
    $character = "James";
sayHi($character);

function cube($num){
 return $num * $num * $num;
}
$cubeResult = cube(4);
echo $cubeResult;


?>
</body>
</html>