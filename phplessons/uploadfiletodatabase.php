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
    <link rel="stylesheet" href="style.css">
    <title>Upload File/Image</title>
</head>

<body>
    <?php

    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $sqlImg = "SELECT * FROM profileimg WHERE userid='$id';";
            $resultImg = mysqli_query($conn, $sqlImg);
            while ($rowImg = mysqli_fetch_assoc($resultImg)) {
                echo "<div class='user-container'>";
                if ($rowImg['status'] == 0) {
                    echo "<img src='uploads/profile" . $id . ".jpg?'" . mt_rand() . ">";
                } else {
                    echo "<img src='uploads/profiledefault.jpg'>";
                }
                echo "<p>" . $row['username'] . "</p>";
                echo "</div>";
            }
        }
    } else {
        echo "No Users yet";
    }
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
    ?>
        <form action="includes/uploadfiletodatabasesignup.inc.php" method="POST">
            <input type="text" name="first" placeholder="First Name">
            <input type="text" name="last" placeholder="Last Name">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="pwd" placeholder="Password">
            <button type="submit" name="submitSignup">Signup</button>
        </form>
    <?php
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