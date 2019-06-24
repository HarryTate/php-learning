<?php
session_start();
include_once 'includes/dbusersconn.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File/Image</title>
</head>

<body>
    <?php
    if (isset($_SESSION['id'])) {
        if ($_SESSION['id'] == 1) {
            echo "You are logged in as user 1";
        }
        ?>
        <form action='includes/uploadfiletodatabase.inc.php' method='POST' enctype='multipart/form-data'>
            <input type='file' name='file'>
            <button type='submit' name='submit'>Upload</button>
        </form>

    <?php
} else {
    echo "You are not logged in.";
}



?>
    <p>Login as user</p>
    <form action='includes/login.inc.php' method='POST'>
        <button type='submit' name='submitLogin'>Login</button>
    </form>
    <p>Logout as user</p>
    <form action="includes/logout.inc.php" method="POST">
        <button type="submit" name="submitLogout">Logout</button>
    </form>
</body>

</html>