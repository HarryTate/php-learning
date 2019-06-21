<?php
session_start();
include '../header.php'; ?>
<ul>
    <li><a href="./startsession">Start Session</a></li>
    <li><a href="./checksession">Check Session</a></li>
</ul>

<?php

$_SESSION['username'] = 'user1';
echo $_SESSION['username'];

if (!isset($_SESSION['username'])) {
    echo "You are not logged in";
} else {
    echo "You are logged in";
}

include '../footer.php'; ?>