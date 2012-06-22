<?php

// create some quick books for testing
$books[0] = new stdClass();
$books[0]->title = "101 Fun Facts about Rocks";

$books[1] = new stdClass();
$books[1]->title = "Don't Touch that Button";

$books[2] = new stdClass();
$books[2]->title = "Coding for Dummies";


// instantiate shelf
require('shelf.php');
$shelf = new Shelf();


// loop through book array
foreach ($books as $book){
	$shelf->addToTop($book); // add to shelf
}
echo "<strong>Add All Books:</strong> ";
echo "<pre>" . print_r($shelf, 1) . "</pre>";


// take one from stack
$bookFromShelf = $shelf->removeFromTop();

echo "<strong>Grab Top Book:</strong> ";
echo "<pre>" . print_r($bookFromShelf,1) . "</pre>";

echo "<strong>Remaining Books:</strong> ";
echo "<pre>" . print_r($shelf, 1) . "</pre>";