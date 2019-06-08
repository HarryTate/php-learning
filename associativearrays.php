<?php include 'header.php';
?>
<h2>Search:</h2>
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
if (isset($_POST['form_posted'])) {
   //  Searchs assciative array using the form
   echo $grades[$_POST["student"]];
};

?>

<h2>All grades</h2>
<?php
foreach ($grades as $data => $value) {
   echo "<strong>" . $data . ":</strong> " . $value . "<br>";
}
?>
</body>

</html>