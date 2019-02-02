<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Learning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <?php echo "<h1>Hello World</h1>"; 
     $name = "Harry";
     $age = "23";
     echo "<p>Hi my name is $name. I am $age years old</p>";

     $string = "This is a string";
     $boolean = true;
     $integer = 4;
     $float = 3.74;
     $noValue = null;
     echo "String: $string <br> boolean: $boolean <br> Integer: $integer <br>float:$float";

     $story = "Jack and Jill went up the hill to collect some water.<br> One of them fell down and that was the end of that.";
     echo "<p><strong>Orgininal Story:</strong> $story </p>";
    //  Convert string to lowercase
     $lowercaseStory = strtolower($story);
     echo "<p><strong>Lowercase Story:</strong> $lowercaseStory</p>";
    //  Convert String to uppercase
     $uppercaseStory = strtoupper($story);
     echo "<p><strong>Lowercase Story:</strong> $uppercaseStory</p>";
     // Get number of characters in string
     $storyNumberOfCharacters = strlen($story);
     echo "<p><strong>Number of Characters in story:</strong> $storyNumberOfCharacters</p>";
     // First character of string
     $firstCharOfString = $story[0];
     echo "<p><strong>First Character of string: </strong>$firstCharOfString</p>";
     // Replace part of string with another
     echo "<p><strong>Replace Jack with Barry:</strong> " . str_replace("Jack","Barry", $story) . "</p>";
    //  Get part of string
    echo "<p><strong>Get part of string:</strong>". substr($story, 4, 40)."</p>";
    //  Maths with PHP
    echo "<p><strong>Maths with PHP</strong></p>";
    // Add numbers together
    $mathsEquation =  "2 + 2 + 5 + 22 =";
    echo "<p> $mathsEquation " . (2 + 2 + 5 + 22) . "</p>";
    // Adding two variables
    $num1 = 5;
    $num2 = 21;
    echo "$num1 + $num2 = " . ($num1 + $num2);
    // Add one (increment) to a number
    $num1++;
    echo "<p> add one to a number (increment) " . $num1 . "</p>";
    // Add a number onto an existing number(shorthand)
    $num1+= 22;
    echo $num1;
    // Math Functions
    // Get highest Number
    echo "<p> Return the highest number from parameters entered: " . max(1,5,3,9) . "</p>";
    // Get lowest Number
    echo "<p> Return the lowest number from parameters entered: " . min(1,5,3,9) . "</p>";
    // Round a number to nearest integer
    echo "<p>Round a number to the nearest integer (12.7) : " . round(12.7) . "</p>";
    // Round a number up 
    echo "<p> Round a number up (2.3) : " . ceil(2.3) . "</p>";
    // Round a number down 
    echo "<p>Round a number down (4.9) : " . floor(4.9) . "</p>";
     ?>
</body>
</html>