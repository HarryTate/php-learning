<?php
session_start();
$userList = array('James', 'Mark', 'Phillip', 'Terry');
if ($userList) {
    $_SESSION['userList'] = $userList;
} else {
    $_SESSION['userList'] = "No users";
}
header("Location: ../user.php");
