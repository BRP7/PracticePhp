<?php
 
// The file is opened using fopen() function
$check = fopen("singleline.txt", "r");
$seq = fgets($check);
 
// Writing buffered output to a file
// until the end-of-file is reached
while(! feof($check))
    fflush($check);
 
// The file is closed using fclose() function
fclose($check);
 
?>