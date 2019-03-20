<?php

require_once('../mysqli_connect.php');
$sql = "SELECT ID, fname, lname, age, gender FROM details";
$result = mysqli_query($conn, $sql);

?>
<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Gender</th>
    </tr>


    <form action="insertdata.php" method="post">
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
    </p>
    <p>
        <label for="age">Gender</label>
        <input type="text" name="gender" id="gender">
    </p>
    <input type="submit" value="Submit">
</form>

    <?php
// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
$age = mysqli_real_escape_string($conn, $_REQUEST['age']);
$gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
$newEntrysql = "INSERT INTO `details` (`fname`, `lname`, `age`, `gender`) VALUES ('$first_name', '$last_name', '$age', '$gender')";


if (mysqli_query($conn, $newEntrysql)) {
    echo "New record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo 
        "<tr>
            <td>" . $row["ID"] ."</td>
            <td>" . $row["fname"] . "</td>
            <td>" . $row["lname"] . "</td>
            <td>" . $row["age"] . "</td>
            <td>" . $row["gender"] . "</td>
        </tr>";
    }
} else {
    echo "0 results";
}


mysqli_close($conn);
?>
</table>
