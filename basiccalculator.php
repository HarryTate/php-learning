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
<form action="basiccalculator.php" method="get">
<input type="number" name="num1">
<input type="number" name="num2">
<input type="submit" name="form_posted">
</form>
<br>
<?php 
if(isset($_POST['form_posted'])) {
 echo $_GET["num1"] + $_GET["num2"];
}
?>
</body>
</html>