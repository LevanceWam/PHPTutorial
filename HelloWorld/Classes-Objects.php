<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and Objects</title>
</head>

<body>
    <!-- Talking about classes and objects in PHP -->
    <!-- in php we can create our own data types -->
    <!-- in php a Class is Specification of a custom data type -->
    <!-- we can use this custom data type to model something in the real world -->
    <!-- represents things like a phone, keyboard and etc. -->

    <!-- so lets say we want to make a software for a library to help it manage its books -->

    <?php
    // notice the pascal naming convention
    // classes are the blueprint for creating objects

    class Book
    // in this class we want to make attributes that define a book
    // so for this class what defines a book is a title, author, and pages 
    {
        // to define a attribute we use var
        var $title;
        var $author;
        private $pages;
    }

    // this is a object
    // this is a instance of a class
    $book = new Book;
    $book->title = "raisin in the sun";
    $book->author = 'Not sure';
    $book->pages = '402';

    echo $book->author;
    ?>

</body>

</html>