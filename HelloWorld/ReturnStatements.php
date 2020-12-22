<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Statements</title>
</head>

<body>
    <!-- php return statements in functions  -->
    <!-- having a function return information -->
    <!-- return statement work just like they do in JS -->
    <!-- returns a value in a function -->
    <!-- when a function hits a return it breaks out of a function -->

    <?php
    function cubed($num)
    {
        return pow($num, 3);
    }

    $result = cubed(4);
    echo $result;
    ?>
</body>

</html>