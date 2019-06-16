<?php
session_start();
include '../header.php'; ?>
<ul>
    <li><a href="./startsession">Start Session</a></li>
    <li><a href="./checksession">Check Session</a></li>
</ul>
<?php
echo $_SESSION['username'];
include '../footer.php'; ?>