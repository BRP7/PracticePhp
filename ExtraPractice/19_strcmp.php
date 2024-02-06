<!-- //strcmp(string1,string2) -->
<!-- Return Value:	
0 - if the two strings are equal
<0 - if string1 is less than string2
>0 - if string1 is greater than string2 -->

<?php
echo strcmp("Hello","Hello");//0
echo "<br>";
echo strcmp("Hello","hELLo");//-1
echo "<br>";
echo strcmp("Hello world!","Hello world!"); // the two strings are equal //0
echo "<br>";
echo strcmp("Hello world!","Hello"); // string1 is greater than string2 //1
echo "<br>";
echo strcmp("Hello world!","Hello world! Hello!"); // string1 is less than string2 //-1
?>