<?php

$string="Hello World";

// echo strlen($string);
// Returns the length of a string.


$Word="W";
// $rep="r";
// echo str_replace($Word, $rep, $string);//Hello rorld
// // // Replaces all occurrences of a substring with another substring in a given string.

// echo strpos($string, $Word);//6
// // Finds the position of the first occurrence of a substring in a string.


// $start=7;
// $length=3;
// echo substr($string, $start, $length);//orl
// // // Returns a part of a string starting from the specified position and with a specified length.

// echo  strtolower($string);//hello world
// // Converts a string to lowercase.

// echo strtoupper($string);//HELLO WORLD
// // Converts a string to uppercase.




// echo trim($string);
// Removes whitespace or other predefined characters from the beginning and end of a string.

$glue="";
$pieces=array("hey","hello");
// echo implode($glue, $pieces);//heyhello
// Joins array elements with a string.

// // $delimiter=" ";
// echo explode(" ", "Geeks for Geeks")
// // Splits a string into an array by a specified delimiter.

// $str = "This is some <i>bold</i> and text.";
// echo htmlspecialchars($str);
// Converts special characters to HTML entities.

// $str='<a href="https;//www.w3schools.com">Go to w3schools.com</a>';
// echo htmlentities($str);
// Converts all applicable characters to HTML entities.

// echo nl2br("One line.\nAnother line.");
// Inserts HTML line breaks before all newlines in a string.

// echo str_repeat("Wow",13);
// Repeats a string a specified number of times.

// echo strrev("Hello World!");
// Reverses a string.

// echo str_shuffle($string);
// Randomly shuffles all characters in a string.

// $str="Hello PHP";  
// print_r(str_split($str));  //Array ( [0] => H [1] => e [2] => l [3] => l [4] => o [5] => [6] => P [7] => H [8] => P )
// Converts a string to an array, breaking it into smaller chunks.

// echo str_word_count("Hello world!");//2
// Returns the number of words in a string.

//  echo substr_replace("Hello world","earth",6);//Hello earth
// Replaces a portion of a string with another string.

// $str = "Hello World";
// echo str_pad($str,20,".");//Hello World.........
// Pads a string to a certain length with another string.

// echo strcmp("Hello world!","Hello world!");//0
// Compares two strings.

$string1 = "geeks for geeks";
 $string2="geeks for geeks";
// echo strcoll($string1, $string2);//0 because same length
// // first string is greater or smaller than the second string or equals to the second string

// $mask="W";
// $start=0;
// $length=7;
// echo strcspn($string, $mask, $start, $length);
// Finds the length of the initial segment not matching a mask.

$email = 'USER@EXAMPLE.com';
// echo stristr($email, 'e'); // outputs ER@EXAMPLE.com
// echo stristr($email, 'e',true); // outputs US
// Returns all of haystack starting from and including the first occurrence of needle to the end.

// echo strpbrk("Hello world!","eo");//ello world!
//Search a string for the characters "oe", and return the rest of the string from where it found the first occurrence of the specified characters:

// echo strrev("Hello World!");
// Reverses a string.

// echo strstr("Hello world!","llo");//llo world!
// echo strstr("Hello world!","world",true);//If true, strstr() returns the part of the haystack before the first occurrence of the needle (excluding the needle).

// Finds the first occurrence of a string.

$arr = array("Hello" => "Hi", "world" => "earth");
echo strtr("Hello world",$arr);// Translates characters or replaces substrings.



?>