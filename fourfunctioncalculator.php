<?php include 'header.php'; ?>

 <form action="fourFunctionCalculator.php" method="post">
First Number:<input type="number" step="0.001" name="num1"><br>
Op: <input type="text" name="op"><br>
Second Number:<input type="number" step="0.001" name="num2"><br>

<input type="submit" name="form_posted">
</form> 

<?php 
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+"){
      echo $num1 + $num2;
    } elseif($op == "-"){
      echo $num1 - $num2;
    } elseif($op == "*"){
      echo $num1 * $num2;
    } elseif($op == "/"){
      echo $num1 / $num2;
    }
    else{
        "invalid Operators ";
    }
 ?>


</body>
</html>