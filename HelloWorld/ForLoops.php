<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- For loops in PHP  -->
    <!-- work the same way as in JS with the expextion of there not being forOf or forin -->
    <!-- we need to learn how to use the forEach function -->

    <?php
    $index = 10;
    for ($i = 0; $i < $index; $i++) {
        echo "$i <br>";
    }

    $luckyNums = array(4, 3, 6, 89, 4, 2, 4);
    for ($i = 0; $i < count($luckyNums); $i++) {
        echo "$luckyNums[$i] <br>";
    }
    ?>
</body>

</html>