<?php
session_start();
require_once("./userlist.inc.php");

if (isset($_POST["name"])) {
    if (in_array($_POST["name"], $users)) {
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["loggedin"] = true;
    } else {
        $_SESSION["name"] = "Not present";
        $_SESSION["loggedin"] = true;
    }
}
header("Location: ../app.php");
