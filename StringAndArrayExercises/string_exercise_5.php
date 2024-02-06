<?php

$quote = "In three words I can sum up everything I've learned about life: it goes on.";

// 1. Count the total number of words in the quote.
$wordCount = str_word_count($quote);
echo "1. Total number of words in the quote: $wordCount\n";
echo "<br>";

// 2. Convert the entire quote to lowercase.
$lowercaseQuote = strtolower($quote);
echo "2. Quote in lowercase: $lowercaseQuote\n";
echo "<br>";

// 3. Capitalize the first letter of each word in the quote.
$capitalizedQuote = ucwords($quote);//ucfirst(1st character)
echo "3. Quote with first letter of each word capitalized: $capitalizedQuote\n";
echo "<br>";

?>
