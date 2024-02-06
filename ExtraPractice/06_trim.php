<?php
//Remove characters from
// both sides of a string ("He" in "Hello" and "d!" in "World")

//trim(string,charlist)
/*charlist	Optional. Specifies which characters to remove from the string. If omitted, all of the following characters are removed:
"\0" - NULL
"\t" - tab
"\n" - new line
"\x0B" - vertical tab
"\r" - carriage return
" " - ordinary white space */

/*
ltrim() - Removes whitespace or other predefined characters from the left side of a string
rtrim() - Removes whitespace or other predefined characters from the right side of a string
 */

// $stringOne="     one   ";
// echo trim($stringOne);

$str = "Hello World!";
echo  "<br>";
echo trim($str,"Hed!");//llo Worl

$str = "Hello World!";
echo "<br>";
echo ltrim($str,"Hed!");//llo World! only remove those who are in starting left

$str = "Hello World!";
echo "<br>";
echo rtrim($str,"d");//Hello World! don't remove anything if that not in extream char or seq of char

$str = "Hello World!";
echo  "<br>";
echo rtrim($str,"Hed!");//Hello Worl only those who are in starting right


?>