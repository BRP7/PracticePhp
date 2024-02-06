<?php

$firstname = "bhoomi";
$middlename = "rameshbhai";
$surname = "parmar";

// Capitalize the first letter of each name
$firstname = ucfirst($firstname);
$middlename = ucfirst($middlename);
$surname = ucfirst($surname);

// Concatenate the names with a space in between
$full_name = $firstname . " " . $middlename . " " . $surname;

// Display the result
echo $full_name;

?>
