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
<form action="associativearrays.php" method="post">
<input type="text" name="student">
<input type="submit" name="form_posted">
</form> 
<br>
<?php 
 $grades = array(
    "Jim" => 15,
    "Oscar" => 12,
    "Susan" => 20
   );
if(isset($_POST['form_posted'])) {
    //  Searchs assciative array using the form
     echo $grades[$_POST["student"]];
    };
    //  Give key a new value value
     $grades["Susan"] = 16;
    //  Return a value
     echo $grades["Oscar"];
?>
</body>
</html>