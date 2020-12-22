<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with Strings</title>
</head>
<body>
<!-- Going to be looking at the in's and outs of working with strings -->
<!-- with PHP we have these functions we can use to find out information and modify the strings -->
    <?php
        // most common datatype we are going to be working with 
        $phrase = "Hi I am Awesome";
        // this converts this into lower case
        echo strtolower("$phrase<br>");

        // this converts this into upper case
        echo strtoupper("$phrase<br>");

        // prints out the number of charaters in the string 
        echo strlen("$phrase <br>");

        // We can find out the different characters of a string
        // so we use a bracket choose a index and find a certian charater in the string
        echo "$phrase[0] <br>";

        // we can modify the individual in the string;
        $phrase[0] = "r";
        echo("$phrase<br>");

        // this allows us to replace certain substrings within the string 
        // the first argument is the string we want to replace
        // next is the string we are replacing 
        // finally is this is the string we are going to do the replacing
        // so we are replacing a word in the string variable that we defined 
        echo str_replace("Awesome", "Amazing", $phrase);

        // this function allows us to get a substring 
        // the first argument is the string we want to get the string from 
        // second argument is where we start from in the string the starting index if the 3rd argument is blank we start from here and go to the end of the string 
        // third argument where we stop
        echo substr($phrase, 0, 8);


    ?>
    <p>Here is a link to the rest of the string functios.<a href="https://www.w3schools.com/php/php_ref_string.asp">String functions</a></p>
</body>
</html>