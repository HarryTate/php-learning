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
<?php 
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
</body>
</html>