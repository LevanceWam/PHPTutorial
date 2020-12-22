<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Calculator</title>
</head>

<body>
    <form action="BetterCal.php" method="get">
        <!-- step allows us to use decimals  -->
        <input type="number" step="0.1" name="num1"> <br>
        <input type="text" name="operator"> <br>
        <input type="number" step="0.0001" name="num2"> <br>

        <input type="submit">
    </form>

    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["operator"];
    if ($op == "+") echo $num1 + $num2;
    if ($op == "-") echo $num1 - $num2;
    if ($op == "/") echo $num1 / $num2;
    if ($op == "*") echo $num1 * $num2;
    else echo "Invalid Operator";
    ?>
</body>

</html>