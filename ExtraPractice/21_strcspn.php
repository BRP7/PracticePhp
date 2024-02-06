<!-- strcspn(string,char,start(op),length(op)) -->

<!-- Print the number of characters found in "Hello world!" before the character "w": -->

<?php
echo strcspn("Hello world!","w",9);//3*********
// echo strcspn("Hello world!","w",2);//4 if you start from 2 to w
// echo strcspn("Hello world!","w",6,2);//that's why 6 to 6 is zero
// echo strcspn("Hello world!","w",0,2); // The start position is 0 and the length of the search string is 6.
//basically if you set length the answer will be length it self because we are searching for that much char only
?>