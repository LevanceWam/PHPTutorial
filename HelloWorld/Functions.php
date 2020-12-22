<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <!-- Learning about functions in PHP -->
    <!-- a function is a container or a block of code designed to perform a specific task -->


    <!-- any code that is in the function is a part if the function -->
    
    <?php 
        function sayHi() {
            echo("hi from php function <br>");
        }

        // executing the code in a function 
        sayHi();

        // to set parameters in a function we have to write them like a variable so they have to have the $ in front
        function greeting($name,$age){
            echo "hello $name you are $age";
        }

        greeting("vance", 25);
    ?>
</body>
</html>