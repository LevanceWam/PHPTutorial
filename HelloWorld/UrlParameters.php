<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Parameters</title>
</head>
<body>
<!-- in this lecture we are going to look at url parameters and php -->
<!-- the url parameter is a value that we can add on to the end of the url -->
<!-- which will pass a value into the php program so we can access it -->


<!-- basically this form returns the name that is submitted from the form -->
<!-- but what we notice is thsat in the url it is also there -->
<!-- so when we submitted the value for name. the name got placed in the URL -->
<!-- this is what we call a url parameter,value, or variable  -->

<!-- this is the information that we are giving to PHP -->
<!-- so from this parameter we can update the value from there -->

<!-- there are going to be times we are going to want the user to interact with the site using text or buttons -->
<!-- but there are times we are going to want to give information to the page -->
<!-- without letting the users doing it -->
<!-- basically if we want certain values that we don't want the user to provide we do it ourselves -->

<!-- we can use the url parameters to accomplish this  -->
<!-- so if we want to add another parameter we just add '& age =70' -->
<!-- so we can't see it on the page but we can access it through PHP -->

<!-- so we can technically echo this  -->
<!-- this can be useful for a site that has a lot of values associated with it  -->
<!-- we can store this values in the url and users can bookmark these  -->


<!-- we can store info in the url -->

<!-- but there is a problem: -->
<!-- this method of storing info it is not very secure  -->
<!-- all of the information that we typed into the site is visible  -->

<!-- this is where post would come into play and that is the topic for the next lecture  -->

<form action="UrlParameters.php" method="get">
<label>Name: <input type="text" name="name"></label>
<input type="submit" value="">
</form>

<?php 
    echo $_GET['name'];
?>
    
</body>
</html>