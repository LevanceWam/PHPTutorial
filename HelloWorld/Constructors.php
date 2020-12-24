<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructors</title>
</head>

<body>
    <!-- going to be learning about php class instructors -->
    <!-- Constructors are special classes that are called when we are making an object of that class -->

    <?php
    class Book
    // in this class we want to make attributes that define a book
    // so for this class what defines a book is a title, author, and pages 
    {
        // to define a attribute we use var
        private $title;
        private $author;
        private $pages;

        // when defining the constructor it needs to be called construct
        function __construct($title, $author, $pages)
        {
            // the keyword this refers to the current object
            // when we use the keyword this we have to prefix it with a $ 
            $this->$title = $title;
            $this->$author = $author;
            $this->$pages = $pages;
        }
    }

    // this is a object
    // this is a instance of a class
    $book = new Book("raisin in the sun", "Not sure");

    echo $book->author;
    ?>
</body>

</html>