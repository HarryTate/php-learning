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