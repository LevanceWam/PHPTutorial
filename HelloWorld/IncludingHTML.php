<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Including Html</title>
</head>

<body>
    <!-- Looking into using the include statement in php -->
    <!-- the include statement allows us to include another file in the php file  -->
    <!-- like another php file or html file -->

    <!-- so if we wanted to have a header and footer for each file  -->
    <!-- this is how we include different files so we can break up our site into little components -->

    <?php include "header.html"; ?>
    <p>Hello World</p>
    <?php include "footer.html"; ?>

</body>

</html>