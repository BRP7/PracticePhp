<?php

$text = "Hello, World! How are you doing?";

// 1. Find the length of the string.
$length = strlen($text);
echo "1. Length of the string: $length\n";
echo "<br>";

// 2. Convert the entire string to lowercase.
$lowercaseText = strtolower($text);
echo "2. String in lowercase: $lowercaseText\n";
echo "<br>";

// 3. Convert the entire string to uppercase.
$uppercaseText = strtoupper($text);
echo "3. String in uppercase: $uppercaseText\n";
echo "<br>";

// 4. Replace "How are you doing?" with "Fine, thank you!".
$modifiedText = str_replace("How are you doing?", "Fine, thank you!", $text);
echo "4. Modified string: $modifiedText\n";
echo "<br>";

// 5. Extract and print the first 10 characters of the string.
$first10Characters = substr($text, 0, 10);
echo "5. First 10 characters: $first10Characters\n";
echo "<br>";


// 6. Extract and print the substring starting from the 8th character to the end.
$substringFrom8th = substr($text, 7);
echo "6. Substring from the 8th character to the end: $substringFrom8th\n";

?>
<!-- 
1. Length of the string: 32
2. String in lowercase: hello, world! how are you doing?
3. String in uppercase: HELLO, WORLD! HOW ARE YOU DOING?
4. Modified string: Hello, World! Fine, thank you!
5. First 10 characters: Hello, Wor
6. Substring from the 8th character to the end: World! How are you doing? -->
