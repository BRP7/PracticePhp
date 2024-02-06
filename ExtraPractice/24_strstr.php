<!-- strstr(string,search,before_search(op))
before_search	Optional. A boolean value whose default is "false".
If set to "true", it returns the part of the string before the first occurrence of the search parameter. -->

<!-- The strstr() function searches for the first occurrence of a string inside another string. -->

<!-- Note: This function is binary-safe. -->

<?php
    echo strstr("Hello world!","world");//world!
    echo "<br>";
    echo strstr("Hello world!","world",true);//Hello
?>