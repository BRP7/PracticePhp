<!-- The str_split() function splits a string into an array. -->

<!-- str_split(string,length) -->

<!-- If length is less than 1, the str_split() function will return FALSE.  If length is larger than the length of string, the entire string will be returned as the only element of the array. -->


<?php
// print_r(str_split("Hello"));
//Array ( [0] => H [1] => e [2] => l [3] => l [4] => o )
// print_r(str_split("Hello",1));//same as without lrngth given
print_r(str_split("Hello",2));//Array ( [0] => He [1] => ll [2] => o )
// print_r(str_split("Hello",3));
//Array ( [0] => Hel [1] => lo )

// like if you give 3 it will combine 3 char at one index
?>