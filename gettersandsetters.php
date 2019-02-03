<?php include 'header.php'; 

//Defining a class
class Movie {
    public $title;
    private $rating;

    // Defines a constor that can be used to make an object
    function __construct($title, $rating){
        $this->title = $title;
        $this->setRating($rating);
    }
    function getRating() {
        return $this->rating;
    }
    function setRating($rating){
        if($rating == "PG" || $rating == "U" || $rating == "12" || $rating == "15" || $rating == "18"){
            $this->rating = $rating;
        } else {
            $this->rating = "No Rating";
        }
    }
}

// Creating objects which are an instance of a class
$avengers = new Movie("Avengers","PG");

$avengers->setRating("U");
echo $avengers->getRating();


?>


</body>
</html>
