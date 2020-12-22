<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working With Numbers </title>
</head>
<body>
    <!-- working with numbers -->
    <!-- one of the most important data types in php -->
    <!-- we are going to see what we can do with them and -->
    <!-- simple operations PHP allows by default -->

    <?php
    // can just type the number with out a variable or special characters
    // supports negative numbers  
        echo 40;
        echo -40;

        // it is important to know the difference between a float and integer
        // floating point number
        echo 57.75;


        // math operation 
        // this renders the answer not the expression
        echo 6+6;
        echo 6-6;
        echo 6*6;
        echo 6/6;
        // modulus just like in JS
        echo 6%6;

        // order of operations
        // php honors the order of operations
        echo 4+5*10;
        echo (4+5)*10;

        // storing number in variables 
        $num = 10;
        echo $num;

        // incrementing and decrementing 
        $num++; // add 1
        echo $num;

        $num--; // subtract 1
        echo $num;

        // adding shorthand
        $num += 25;
        echo $num;

        // subtracting shorthand
        $num-= 5;
        echo $num;

        // multiplication shorthand
        $num*= 2;
        echo $num;

        // Complex math operations like square root 

        // absolute value 
        // returns the value
        echo abs(-100);

        // exponents
        // 2 to the power of 5
        echo pow(2,5);

        // squaure root of a number 
        echo sqrt(25);

        // comparing numbers 
        // returns the bigger number 
        echo max(88, 100);

        // return smallest number 
        echo min(2, 1000);

        // rounding numbers
        // this goes by standard rounding rules 
        echo round(3.5);

        // always rounds up 
        echo ceil(3.3);

        // always rounds down 
        echo floor(4.7);
    ?>
    <p>Here is a link to the rest of the string functios.<a href="https://www.w3schools.com/php/php_ref_math.asp">number functions</a></p>
</body>
</html>