<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBoxes</title>
</head>
<body>
<!-- we are going to look at getting input from checkboxes in php -->
<!-- we are going to use arrays too -->

<!-- so we are going to have the user select their favorite fruits  -->


    <form action="Checkboxes.php" method="post">
    <!-- when ever we want to get input from multiple checkboxes -->
    <!-- we always want to add the [] this lets us know we are going to store them in a array -->
    <!-- we are also going to use the value attribute to give the checkbox its value -->
        Apples: <input type="checkbox" name="fruits[]" value="apples" ><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges" ><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears" ><br>
        <input type="submit">
    </form>

    <!-- now we are going to want to get the values of whatever the user checks  -->
    <!-- using the post keyword we are getting the values that the users is checking  -->
    <!-- and we are storing them into an array -->
    <?php 
    // whatever the user checks we are going to get it in a array 
    $fruits = $_POST["fruits"];
    // this will not show the elements in the array we have to do it a different way
    echo $fruits;
    ?>
</body>
</html>