<!-- The str_word_count() function counts the number of words in a string. -->

<!-- str_word_count(string,return,char) -->

<!-- return	Optional. Specifies the return value of the str_word_count() function.
Possible values:

0 - Default. Returns the number of words found
1 - Returns an array with the words from the string
2 - Returns an array where the key is the position of the word in the string, and value is the actual word -->

<!-- char:& this also get key in array -->

<?php
// print_r(str_word_count("Hello world & good morning!",1));//Array ( [0] => Hello [1] => world [2] => good [3] => morning )
print_r(str_word_count("Hello world & good morning!",2));//Array ( [0] => Hello [6] => world [14] => good [19] => morning )
// print_r(str_word_count("Hello world & good morning!",1,"&"));//Array ( [0] => Hello [1] => world [2] => & [3] => good [4] => morning )
?>
