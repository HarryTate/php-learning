<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>PHP Learning</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
<!-- <script src="main.js"></script> -->
</head>
<body>
<!-- <form action="functions.php" method="post">

<input type="submit" name="form_posted">
</form> -->
<br>
<?php 

    function sayHi($name){
        echo "Hello $name <br>";
    }
    $character = "James";
sayHi($character);
sayHi("Craig");
sayHi("Phillip");

?>
</body>
</html>