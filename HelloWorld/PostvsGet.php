<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- we are going to take a look at 2 different ways to get information from users  -->
<!-- basically we are going to use the 2 different form methods post and get-->
<!-- We are going to look at the difference between them and see what they are doing  -->
<!-- we are going to take a look at when to use one and not the other  -->

<!-- the forms are asking for the password -->
<!-- we are now going to look at the ways we are going to get a password from a user  -->

<!-- up to this point we always used the get method -->
<!-- when we use this method to get information it is obviously submitted into php -->
<!-- so we can use it. But that information is also going to put in the URL as a url parameter -->
<!-- remember that the url parameter is another way we pass information in php -->

<!-- So when we pass the password in the through the form we are going to get it in the url -->
<!-- this is definitely not a good thing for the password to be in the url -->
<!-- we can totally access this and change it  -->

<!-- in cases like this when we have information we want to pass between the client and the server more securely -->
<!-- we want to use the post method -->
<!-- with this change it is going to do the same thing get did but it is not going to put the information in the url parameter -->
<!-- we can aslo potentially get more information from the user using post than get -->

<!-- The main difference here is that with using post we don't have to worry about url parameters -->
<!-- post is more secure than get -->

<form action="PostvsGet.php" method="get">
Password: <input type="password" name="password"><br>
<input type="submit">
</form>

<form action="PostvsGet.php" method="post">
Password: <input type="password" name="pass"><br>
<input type="submit">
</form>

<?php
    echo $_GET['password'];
    echo $_POST['pass'];
?>
    
</body>
</html>