<?php require_once './header.php' ?>

<form action="./includes/login.inc.php" method="POST">
    Name: <input type="text" name="name">
    <button type="submit">Log in</button>
</form>

<?php
if ($_SESSION["loggedin"] == true) {
    echo $_SESSION["name"];
} else {
    $_SESSION["loggedin"] = false;
    echo "you are not logged in";
}

require_once './footer.php';
?>