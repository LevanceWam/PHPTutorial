<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- going to build a Mad lib game using PHP -->
<!-- Basically a game that we enter in random words and -->
<!-- place them into a story or sentence -->

<!-- we are going to allow the user to enter in words into a story -->
<!-- basically its going to be the same thing we did for the calculator 
but this time we have to store the values in a variable then print them -->

<form action="MadLibs.php" method="get">
    <input type="text" name="color"> <br>
    <input type="text" name="plural"><br>
    <input type="text" name="food"> <br>
    <input type="submit">
</form>

    <?php
        // storing the values from the form into these variables 
        $color = $_GET['color'];
        $plural = $_GET['plural'];
        $food = $_GET['food'];

        // inserting the variables with the values into the madlib
        echo "Roses are red $color <br>" ;
        echo "$plural are blue <br>";
        echo "$food are yummy <br>";
    ?>
</body>
</html>