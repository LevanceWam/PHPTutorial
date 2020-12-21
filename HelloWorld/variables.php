<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- going to learn about variables in php -->
<!-- now what if we wanted to change the name george but we only wanted to change it once   -->
<!-- we use a variable  -->
<!-- we use the $ to define a varibale  -->
<!-- to insert the value we need to place the variable with the $ where we want it  -->
<!-- these variables can be modified through out the program -->
    <?php
    $characterName = "kevin";
    $age = 99;
    echo "there once was a man named $characterName <br>";
    echo "He was $age years old <br>";
    // later on in the code we can change the value of the variable 
    $characterName = "james";
    echo "He liked his name $characterName <br>";
    echo "He did not like being $age <br>";
    ?>
</body>
</html>