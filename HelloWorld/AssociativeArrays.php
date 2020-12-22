<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>

    <!-- we are going to learn how to use associate arrays in php -->
    <!-- a associative array is a special kind of array -->
    <!-- where we can store data values and something called key value pairs  -->
    <!-- with this kind of array we can store a series of key value pairs which allows us to access information differerntly  -->

    <!-- Imagine if we were making a website for a school -->
    <!-- we want to be able to keep track of the students in the class and the grades they got on the test -->
    <!-- so in this associate array we are going to store 2 pieces of information -->
    <!-- the name and the grade on the test -->

    <!-- so the different here is we are mapping a key to a value here -->
    <!-- kinda like a hashMap the first element is the key and the arrow binds the key to the value  -->

    <!-- quick exercise using a form return the grade of a student inputted in the form -->

    <form action="AssociativeArrays.php" method="post">
        <input type="text" name="key">
        <input type="submit">
    </form>

    <?php 
    // so again we are storing the students name(key) and we are mapping it to the grade(value)
        $grades = array("jim"=>"A+", "penny"=>"B-", "jack"=>"A");
        // now we can access the grade of a student by calling the key
        echo $grades["jack"];

        // form exercise returning the value from a key
        $key = $_POST['key'];
        echo $grades[$key];
    ?>

    <!-- recap -->
    <!-- so in a regular array we access elements by their index position -->
    <!-- with an associative array we access the element with their key that gives us a value  -->
    <!-- the key is mapped to a value  -->
    <!-- we want to make sure that the keys are unique and they are not sharing anywhere else in the array -->
</body>
</html>