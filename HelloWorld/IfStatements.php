<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements Part 1</title>
</head>

<body>
    <!-- using if statements -->
    <!-- they are similar to JS if statements -->
    <!-- they also use the && operator and || operator-->
    <!-- PHP can also use elseif -->
    <!-- can also use ! not operator -->

    <?php
    $isMale = false;
    $isTall = true;
    if ($isMale || !$isTall) echo "He is a male";
    else echo 'Ask them what they are ';
    ?>
</body>

</html>