<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loops</title>
</head>

<body>
    <!-- using while loops in PHP -->
    <!-- While loops allows us to loop over a block of code while the statement is true  -->
    <!-- executed just like in JS -->
    <!-- do while loops are also executed the same  -->

    <?php
    $index = 1;
    // the condition in the parethesis is called the loop condition
    do {
        echo "$index <br>";
        $index++;
    } while ($index <= 5)
    ?>

</body>

</html>