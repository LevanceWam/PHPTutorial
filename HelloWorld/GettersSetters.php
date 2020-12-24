<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters and Setters</title>
</head>

<body>
    <!-- getters and setters in php -->
    <!-- getters and setters are functions that allow us to control the access people have to a property -->
    <?php
    class Movie
    {
        // private is a visibility modifier 
        // depending on the keyword that is used it determines if an attribute is 
        // public, private, or protected
        // these keywords let php know what code or where we can use these attributes 

        private $title;
        private $rating;

        function __construct(string $title, string $rating)
        {
            $this->title = $title;
            // for this constructor we can make sure that the correct rating is given to the attribute when we create a new object
            $this->setRating($rating);
        }

        // using this function we can get the private property
        function getRating()
        {
            return $this->rating;
        }

        function setRating($rating)
        {
            switch ($rating) {
                case "G":
                    $this->rating = "G";
                    break;
                case "PG":
                    $this->rating = "PG";
                    break;
                case "PG-13":
                    $this->rating = "PG-13";
                    break;
                case "R":
                    $this->rating = "R";
                    break;
                default:
                    $this->rating = "NR";
            }
        }
    }

    $avengers = new Movie("avengers", "PG-13");
    $avengers->setRating("R");
    echo $avengers->getRating();

    ?>
</body>

</html>