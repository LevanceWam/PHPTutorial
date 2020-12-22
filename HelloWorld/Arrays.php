<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<!-- going to look at arrays in PHP -->
<!-- array is a container where we can store multiple pieces of information or values -->
<!--  don't forget that indexes start at 0 -->
<!-- we can store different data types in array  -->



    <?php 
    // to make an array we define a variable and call the keyword array and pass other values in it like a function
        $friends = array('kevin','max');

        // accessing the elements in the array
        echo $friends; // prints the entire array
        echo $friends[0]; // prints the first element in the array

        // modifying elements
        $friends[0] = 'Timmy';

        // adding elements
        $friends[3] = 'luke';

        // seeing how many elements in the array
        echo count($friends);
    ?>
    <p>Here is a link to the rest of the string functios.<a href="https://www.w3schools.com/php/php_ref_array.asp">number functions</a></p>
</body>
</html>