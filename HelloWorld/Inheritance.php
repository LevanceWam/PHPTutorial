<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>

<body>
    <!-- Inheritance in php -->
    <!-- Inheritance is where a class inherit or use the functionality of another class -->
    <!-- this includes the functions and attributes -->
    <?php
    class Chef
    {
        function makeChicken()
        {
            echo "The Chef makes chicken <br>";
        }
        function makeSalad()
        {
            echo "The Chef makes salad <br>";
        }
        function makeSpecialDish()
        {
            echo "The Chef BBQ ribs <br>";
        }
    }

    // this allow the sous chef to do all of the things that the regular chef
    // this makes the sousChef is the child or deprived class from the parent class that is chef
    class SousChef extends Chef
    {
        function makeSoup()
        {
            echo "the Sous Chef makes soup";
        }

        // here we are overriding a function from the parent class
        function makeSpecialDish()
        {
            echo 'The sous chef makes Sushi';
        }
    }

    $chef = new Chef();
    $chef->makeSpecialDish();

    $sousChef = new SousChef();
    // since we are inheriting from the chef class we can use its methods 
    $sousChef->makeSalad();
    // in the sousChef class we overrode this method so it will say something different from the chef object
    $sousChef->makeSpecialDish();
    ?>
</body>

</html>