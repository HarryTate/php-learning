<?php include 'header.php'; 

//Defining a class
class Book {
    var $title;
    var $author;
    var $pages;

    // Defines a constor that can be used to make an object
    function __construct($aTitle, $aAuthor, $aPages){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
    }
}

// Creating objects which are an instance of a class
$book1 = new Book("Harry Potter", "JK Rowling", 200);
// update the instance of the obeject
$book1->title = "The wind in the willow";
$book2 = new Book("Cat in the Hat", "James Brown", 40);

echo $book1->title;
?>
<br>
<?php
class Student {
    public $name;
    public $major;
    public $gpa;

    function __construct($name,$major,$gpa){
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
    }
    function hasHonors(){
        if($this->gpa >= 3.5){
            return "true";
        } else {
            return "false";
        }
    }
}

$student1 = new Student("Peter", "Maths", 2.4);
$student2 = new Student("Graham", "English", 3.7);
// parses student object in hasHonors function to see if they have honors
echo $student2->hasHonors();

    ?>
</body>
</html>
