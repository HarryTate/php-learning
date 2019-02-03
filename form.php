<?php include 'header.php';
 ?>
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
</html>