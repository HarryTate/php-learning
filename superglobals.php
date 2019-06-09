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
echo $_POST['name'] . '<br>';

// GET Superglobals
echo $_GET['name'];


include 'footer.php'; ?>