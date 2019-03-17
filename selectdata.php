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
    <?php
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
