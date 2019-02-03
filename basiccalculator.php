<?php include 'header.php';
 ?>
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