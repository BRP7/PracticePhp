<!-- This function is similar to the strcmp function, 
with the difference that you can specify the number of characters from each 
string to be used in the comparison with strncmp(). -->

<!-- strncmp(string1,string2,length) -->

<?php
echo strncmp("Hello world!","Hello earth!",7);//1 because w > e in 

?>