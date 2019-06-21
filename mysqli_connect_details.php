<!--
     This does not contain real password or username and is only intended to show what is contained in the real connection file -->
<?php
$servername = Server Here;
$username = Username Here;
$password = Password Here;
$dbname = Database Name Here;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
