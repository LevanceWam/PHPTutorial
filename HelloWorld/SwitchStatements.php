<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>

<body>
    <!-- switch statements -->
    <!-- a switch statement is a special kind of if statement -->
    <!-- that can be used to compare to multiple values -->

    <form action="SwitchStatements.php" method="post">
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php
    $grade = $_POST["grade"];

    switch ($grade) {
        case "A":
            echo 'Amazing';
            break;
        case "B":
            echo 'Good job';
            break;
        case "C":
            echo 'Try a little Harder next time';
            break;
        case "F":
            echo 'Trash';
            break;

            // this is for if the user uses the wrong value 
        default:
            echo "invalid grade";
    }
    ?>
</body>

</html>