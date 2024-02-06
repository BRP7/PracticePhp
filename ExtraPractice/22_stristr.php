<!-- stristr(string,search,before_search(op)) -->

<!-- before_search	Optional. A boolean value whose default is "false". If set to "true",
 it returns the part of the string before the first occurrence of the search parameter. -->

<!-- The stristr() function searches for the first occurrence of a string inside another string. -->

<!--  This function is case-insensitive. For a case-sensitive search, use strstr() function. -->
<!-- case-insensitive -->
<?php
    // echo stristr("Hello world!","world");//world
    // echo stristr("Hello world!","Wo");//world
    echo stristr("Hello world!","HO");//blank pagr
    echo stristr("Hello world!","H");//Hello world!
    // echo stristr("Hello world!","world1");//blank page
    echo "<br>";
    //Search a string for the ASCII value of "o", and return the rest of the string:
    // echo stristr("Hello world!",111);
    echo "<br>";
    // echo stristr("Hello world!","WORLD",true);

?>