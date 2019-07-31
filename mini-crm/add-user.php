<?php require_once('includes/header.php');

if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $sname = $_POST["sname"];
    $dob = $_POST["dob"];
    $dbn->insertUser($fname, $sname, $dob);
}
?>

<form action="" method="post">
    <label for="fname">First Name</label>
    <input type="text" name="fname">

    <label for="sname">Surname</label>
    <input type="text" name="sname">

    <label for="dob">Date of Birth</label>
    <input type="date" name="dob">

    <input type="submit" name="submit" value="Register">
</form>
<?php
require_once('includes/footer.php');
