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
<form action="form.php" method="get">
Name: <input type="text" name="name">
Age: <input type="number" name="cat">
<input type="submit" name="form_posted">
</form>
<br>
<?php 
if(isset($_POST['form_posted'])) {
  echo "Your name is:" . $_GET["name"];
  echo "Your name is:" . $_GET["cat"];
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
<form action="form.php" method="get">
Name: <input type="text" name="name">
Age: <input type="number" name="cat">
<input type="submit" name="form_posted">
</form>
<br>
<?php 
if(isset($_POST['form_posted'])) {
  echo "Your name is:" . $_GET["name"];
  echo "Your name is:" . $_GET["cat"];
}


?>
</body>
>>>>>>> 0119d324624f67a03d4f74e14dbd8f5fe1dc1675
</html>