<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object functions</title>
</head>

<body>
    <?php
    class Student
    {
        private $name;
        private $major;
        private $gpa;

        // type annotating 
        function __construct(string $name, string $major, int $gpa)
        {
            // notice that the field suffixing the this keyword does not need $
            // this is because this is going to make it a seperate variable and we do not want that
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }

        function getName()
        {
            echo $this->name;
        }

        function getGpa()
        {
            echo $this->gpa;
        }

        function getMajor()
        {
            echo $this->major;
        }

        function hasHonors()
        {
            // PHP is not able to print out true or false so instead of passing the booleans we have to pass the strings 
            return ($this->gpa > 3) ? "true" : "false";
        }
    }

    $student = new Student("Travis", "Computer Science", 4);

    echo $student->hasHonors(), "<br>";
    echo $student->getName(), "<br>";
    echo $student->getMajor();


    ?>
</body>

</html>