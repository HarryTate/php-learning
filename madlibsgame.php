<<<<<<< HEAD
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
<form action="madlibsgame.php" method="post">
<input type="text" name="color1"> <br>
<input type="text" name="color2"> <br>
<input type="text" name="color3">
<input type="submit" name="form_posted">
</form>
<br>
<?php 
if(isset($_POST['form_posted'])) {
  $color1 = $_POST["color1"];
  $color3 = $_POST["color2"];
  $color2 = $_POST["color3"];
  echo "Roses are $color1 <br>";
  echo "Tulips are $color2 <br>";
  echo "Violets are $color3 <br>";  
}
?>

</body>
=======
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
<form action="madlibsgame.php" method="post">
<input type="text" name="color1"> <br>
<input type="text" name="color2"> <br>
<input type="text" name="color3">
<input type="submit" name="form_posted">
</form>
<br>
<?php 
if(isset($_POST['form_posted'])) {
  $color1 = $_POST["color1"];
  $color3 = $_POST["color2"];
  $color2 = $_POST["color3"];
  echo "Roses are $color1 <br>";
  echo "Tulips are $color2 <br>";
  echo "Violets are $color3 <br>";  
}
?>

</body>
>>>>>>> 0119d324624f67a03d4f74e14dbd8f5fe1dc1675
</html>