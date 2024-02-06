<?php 
/* strpos -parameters
$haystack: The string to search in.(which)
$needle: The substring to search for.(what)
$offset (optional): The offset to start the search from. If specified, the search will start from this position in the string.(from where)
*/
/*The strpos function in PHP is used to find the position of the first occurrence of a substring
 within a string. The function returns the numeric position of the first occurrence of the substring,
  or false(but doesn't print false it gives you blank page)if the substring is not found. 
  */

  $haystack = "Hello, world!";
  $needle = "world";
  
  $position = strpos($haystack, $needle);
  echo $position;//7

// $position = strpos($haystack, "F");
// echo $position;//print nothing

  if ($position !== false) {
    echo "The substring '$needle' was found at position $position.";
} else {
    echo "The substring '$needle' was not found in the string.";
}
  

?>