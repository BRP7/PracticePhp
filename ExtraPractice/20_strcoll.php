<!-- strcoll(string1,string2) -->

<!-- The strcoll() function compares two strings. -->

<!-- The comparison of the strings may vary depending on the locale settings (A<a or A>a). -->

<!-- If the current locale is C or POSIX, this function works the same way as strcmp(). -->
<?php
setlocale (LC_COLLATE, 'NL');//0
echo strcoll("Hello World!","Hello World!");
echo "<br>";

setlocale (LC_COLLATE, 'en_US');//0
echo strcoll("Hello World!","Hello World!");
?>