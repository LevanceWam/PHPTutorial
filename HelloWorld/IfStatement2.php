<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statement Part 2</title>
</head>

<body>
    <!-- using comparsions and if statements in PHP -->
    <!-- we are going to remake the max function in php from scratch -->
    <!-- comparing values is similar to JS  -->
    <!-- ternarnies work like they do in js -->
    <!-- >= and <= work the same also -->
    <!-- so does != -->

    <!-- We want to extend the max function and we want to be able to pass 3 numbers  -->

    <?php
    function getMax($num1, $num2, $num3)
    {
        $temp = ($num1 > $num2) ? $num1 : $num2;
        return ($temp > $num3) ? $temp : $num3;
    }
    echo getMax(200, 150, 200);
    ?>
</body>

</html>