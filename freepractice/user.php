<?php include_once './header.php';
if ($_SESSION["userList"]) {
    foreach ($_SESSION['userList'] as $user) {
        $resultUsers[] = $user;
    }
} else {
    header("Location: ./includes/currentusers.inc.php");
}
echo "<h1>" . implode(",", $resultUsers) . "</h1>";

include_once './footer.php';
