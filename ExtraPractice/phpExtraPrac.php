<?php
$array = array("a" => 1, "b" => 2, "c" => 3, "d" => "2");

// Get all keys of the array
$allKeys = array_keys($array);
// print_r($allKeys);//Array ( [0] => a [1] => b [2] => c [3] => d ) 

// Get keys with a specific value (e.g., 2)
$keysWithValueTwo = array_keys($array, 2);
// print_r($keysWithValueTwo);//Array ( [0] => b [1] => d ) 

// Get keys with a specific value (e.g., 2)//true type & value both evaluated & false only value
$keysWithValueTwo = array_keys($array, 2, true);
// print_r($keysWithValueTwo);//Array ( [0] => b )



$originalArray = [1, 2, 3, 4, 5];
$slicedArray = array_slice($originalArray, 1, 3); // Extract elements from index 1 to 3
print_r($slicedArray);//Array ( [0] => 2 [1] => 3 [2] => 4 )
print_r($originalArray); //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

?>