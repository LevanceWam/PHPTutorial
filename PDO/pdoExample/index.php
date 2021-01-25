<?php

// create a PDO instance 
// we need to supply the connection to the database 
$pdo = new PDO('sqlite:DEMO.db');
// setting the default format to a object
$pdo->setAttribute(
    PDO::ATTR_DEFAULT_FETCH_MODE,
    PDO::FETCH_OBJ
);

// PDO query

// we are storing the results in this variable 
// $stmt = $pdo->query('SELECT * FROM demo');

// returning the results as an associative array
// so we can format this the way we want to
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     // here we are grabbing it by the field that we define in the db
//     // . is to Concatenate
//     // this is going to print out all of the titles from the course 
//     echo $row['title'] . '<br>';
// }

// we are going to do the same thing we did above but with a object
// while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
//     // this is the syntax for object 
//     echo $row->title . '<br>';
// }

// because we set the default to an object back on line 7 we can use the obj syntax
// while ($row = $stmt->fetch()) {
//     // this is the syntax for object 
//     echo $row->title . '<br>';
// }

//  -------------------------------------------------------

// PDO Prepared Statement

// UNSAFE 
// this is where the input from the form would go
// but this is giving the Opportunity to actually insert SQL instructions 
// right into the query
// $sql = "SELECT * FROM demo WHERE author = '$author'";

// fetch multiple post

// user input 
$author = 'brad';

// positional statement 
// the question mark is a positional parameter 
// this is a placeholder for where the variable holding the input goes
$sql = "SELECT * FROM demo WHERE author = ?";

// this is going to prepare our statement
$stmt = $pdo->prepare($sql);

// we need to pass an array and inside of this array we need to
// pass the variable we want to execute
// so the placeholder is going to be filled with this as the value 
$stmt->execute([$author]);

// this is going to get all of the results  
// inside of the fetch all we can format this how we want to but we already have the default set
$post = $stmt->fetchAll();

// this is going to show us what is in this post object 
// var_dump($post);

// looping through the post 
foreach ($post as $post) {
    echo $post->title . '<br>';
}
