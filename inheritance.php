<?php
include 'header.php'; 

class Chef {
    function makeChicken(){
        echo "Chef makes chicken <br>";
    }
    function makeSalad(){
        echo "Chef makes salad <br>";
    }
    function makeSushi(){
        echo "Chef makes Sushi <br>";
    }
}

class ItalianChef extends Chef {
    function makePasta(){
        echo "Italian Chef makes pasta";
    }
    function makeSpecialDish(){
        echo "Italian Chef makes BBQ Ribs";
    }
}
$chef = new Chef();
$chef->makeChicken();

$ItalianChef = new ItalianChef();
$ItalianChef->makeSpecialDish();
?>
</body>
</html>