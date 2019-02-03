<?php include 'header.php';
?>
 <form action="switchstatements.php" method="post">
 What was your Grade: <input type="text" name="grade">
<input type="submit" name="form_posted">
</form> 

<?php 
    $grade = $_POST["grade"];

    switch($grade){
        case "A":
            echo "You did amazing";
            break;
        case "B":
            echo "You did pretty good";
            break;
        case "C":
            echo "You did ok";
            break;
        case "D":
            echo "You didn't do so well";
            break;
        case "E":
            echo "You did awful";
            break;
        case "F":
            echo "You failed";
            break;
        default: 
            echo "You entered an invalid Grade<br>
                    Valid grades are A, B, C, D, E, F";
    }
 ?>


</body>
</html>