<?php include 'header.php';
 ?>
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
</html>