<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- we are going to build a calculator using PHP and forms  -->
<!-- first we need to get 2 numbers from the user -->
<!-- add them together then return the sum -->
    <form action="Calculator.php" method="get">
        <input type="number" name="Num1">
        <input type="number" name="Num2">
        <input type="submit">
    </form>

    Your value is: <?php 
    // storing the values from the form into the varible and eching the sum
    // we didn't need the variables we can add the gets but it is good practice
    // note that we can access the num1 and num2 variables in the url and change the numbers
        $valueOne = $_GET['Num1'];
        $valueTwo = $_GET['Num2'];
        echo $valueOne + $valueTwo;
    ?>
</body>
</html>