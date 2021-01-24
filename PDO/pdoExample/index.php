<?php

// create a PDO instance 
// we need to supply the connection to the database 
$pdo = new PDO('sqlite:DEMO.db');

// PDO query

// we are storing the results in this variable 
$stmt = $pdo->query('SELECT * FROM demo');

// returning the results as an associative array
// so we can format this the way we want to
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // here we are grabbing it by the field that we define in the db
    // . is to Concatenate
    // this is going to print out all of the titles from the course 
    echo $row['title'] . '<br>';
}

// we are going to do the same thing we did above but with a object
while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    // this is the syntax for object 
    echo $row->title . '<br>';
}
