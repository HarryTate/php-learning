<?php include 'header.php';
 ?>
<form action="associativearrays.php" method="post">
<input type="text" name="student">
<input type="submit" name="form_posted">
</form> 
<br>
<?php 
 $grades = array(
    "Jim" => 15,
    "Oscar" => 12,
    "Susan" => 20,
    "Jake" => 11
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