<!-- Break a string into an array: -->
<!-- explode(separator,string,limit) -->
<?php
// $str = "Hello world. It's a beautiful day.";
// print_r (explode(" ",$str));


// $str = "Hello world. It's a beautiful day.";
// print_r (explode(" ",$str,0));
// //Array ( [0] => Hello world. It's a beautiful day. ) 

$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str,-1));
//from backward remove 1 element
//Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful ) limit Optional. Specifies the number of array elements to return.
?>

<!-- Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful [5] => day. ) -->limit	Optional. Specifies the number of array elements to return.
<!-- limit	Optional. Specifies the number of array elements to return.
Possible values:

Greater than 0 - Returns an array with a maximum of limit element(s)
Less than 0 - Returns an array except for the last -limit elements()
0 - Returns an array with one element -->