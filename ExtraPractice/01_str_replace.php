<?php
//str_replace(whatToReplace,withWhat,inWhichStringToFind)
$find = array("Hello","world");
$replace = array("B");
$arr = array("Hello","world","!");
print_r(str_replace($find,$replace,$arr));

//Array ( [0] => B [1] => [2] => ! ) returns you an array
// The str_replace function is converting the array to a string and replacing occurrences of "Hello" and "world" with
//  "B". However, it treats the entire array as a single string, resulting in unexpected output.
// If you want to replace elements in an array, you should use array_map along with str_replace as shown in the
//  corrected code in the previous response.

/*
<?php
$find = array("Hello", "world");
$replace = array("B");
$arr = array("Hello", "world", "!");
$result = array_map(function ($item) use ($find, $replace) {
    return str_replace($find, $replace, $item);
}, $arr);

print_r($result);
?>
o/p:
Array( [0] => B [1] => B [2] => !)
*/
?>
