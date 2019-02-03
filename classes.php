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


$book2 = new Book("Cat in the Hat", "James Brown", 40);

echo $book1->title;
    ?>
</body>
</html>
