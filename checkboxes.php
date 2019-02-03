<?php include 'header.php'; ?>

<form action="checkboxes.php" method="post">
 Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
 Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
 Pears: <input type="checkbox" name="fruits[]" value= "pears"><br>
<input type="submit" name="form_posted">
</form>
<br>
<?php 

if(isset($_POST['form_posted'])) {
$fruits = $_POST["fruits"];
// Returns first check box checked
echo $fruits[0];

}


?>
</body>
</html>