<?php include 'header.php'; ?>
<h1>Superglobals</h1>
<form method="GET">
    <input type="text" name="name">
    <button type="submit">Submit (get)</button>
</form>

<form method="POST">
    <input type="text" name="name">
    <button type="submit">Submit (post)</button>
</form>
<?php
$x = 5;



// GLOBALS
function something()
{
    $y = 10;
    echo $GLOBALS['x'];
    // echo $x;
}

// something();

// POST Superglobals
if (isset($_POST['name'])) {
    echo $_POST['name'] . '<br>';
}
// GET Superglobals
if (isset($_GET['name'])) {
    echo $_GET['name'];
}

echo "Host: " . $_SERVER['HTTP_HOST'] . "<br>";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Path: " . $_SERVER['PHP_SELF'] . "<br>";
// echo "Referrer: " . $_SERVER['HTTP_REFERER'];
echo "User: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";





include 'footer.php'; ?>