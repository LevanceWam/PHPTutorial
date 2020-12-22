<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- learning how to get input from users in php -->
<!-- at times we are going to want to get data from users  -->
<!-- we can get information from users in php from text fields and buttons-->
<!-- first we need to set up a form -->
<!-- this allows users to enter in information that we can pass to PHP -->
<!-- the user can interact with this and php can get whatever the user enters -->

<!-- in the action attribute we are putting the name of the php page that we want to handle this form -->
<!-- so we are going to use this file  -->
<!-- so we are going to handle what happens this information -->

<!-- next attribute we are going to need is method -->
<!-- this lets the form now what we are going to do with it  -->
<!-- with this form we are going to get informationn from the user  -->
    <form action="GettingUserInput.php" method="GET">
        Name: <input type="text" name="username">
        <br>
        Age: <input type="number" name="age">
        <br>
        Email: <input type="email" name="email" required>
        <input type="submit">
    </form>

    <br>
    <!-- now we can access the info that was submitted from the form here in php -->
    <!-- so we are going to echo the name that was inputted  -->
   Your name is:  <?php
    // getting the information that was sumbitted from the form
    // so we are getting the input we want to grab
    // so we are going to grab the input that has name 
    // now we are going to print the name that was submitted 
    // in order to grab the the information we have to make sure the name of input matches 
     echo $_GET["username"];
     
     ?>
    <br>
    Your age is: <?php echo $_GET["age"]; ?>
    <br>
    Your email is: <?php echo $_GET["email"]; ?>
</body>
</html>