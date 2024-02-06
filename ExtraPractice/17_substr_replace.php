<!-- substr_replace(string,replacement,start,length(optional)) -->

<!-- start	Required. Specifies where to start replacing in the string
A positive number - Start replacing at the specified position in the string
Negative number - Start replacing at the specified position from the end of the string
0 - Start replacing at the first character in the string -->

<!-- length	Optional. Specifies how many characters should be replaced. Default is the same length as the string.
A positive number - The length of string to be replaced
A negative number - How many characters should be left at end of string after replacing
0 - Insert instead of replace -->
<?php
// echo substr_replace("Hello world","earth",-5);//Hello earth
// echo substr_replace("Hello world","earth",6);//well it doesn't do anything to space replace nextchar
// echo substr_replace("Hello world","earth",6,2);//Hello earthrld--wo ne earth thi replace & all other are as it is
echo substr_replace("world","Hello ",0,0);//Hello world
//add hello at 0 position & because length is 0 it doesn't replace world
?>