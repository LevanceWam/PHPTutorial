<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>including PHP</title>
</head>

<body>
    <!-- Learning how to include other php files -->
    <!-- we can define variables in another php file -->
    <!-- So basically making a template  -->
    <!-- then we can set a value here or another file -->
    <!-- so we are making php dynamic -->
    <?php
    $title = "this is my first post";
    $author =  "Vance";
    $wordCount = 40;
    include "articleHeader.php";
    ?>

    <!-- her is another cool thing -->
    <!-- so what we wanted to use functionality from another file  -->
    <!-- inside of this one  -->

    <!-- by including the file we have access to its functions and variables  -->

    <?php
    include "UsefulTools.php";
    greet("Cactus");
    echo $feetInMile;
    ?>

</body>

</html>