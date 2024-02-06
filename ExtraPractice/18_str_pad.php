<!-- str_pad(string,length,pad_string(op,whiteSpace),pad_type(op,rightside)) -->

<?php
$str = "Hello World";
echo str_pad($str,20,".");//Hello World.........
echo "<br>";
echo str_pad($str,20,".",STR_PAD_LEFT);//.........Hello World
echo "<br>";
echo str_pad($str,20,"-",STR_PAD_BOTH);//ak right side ma vadhare if not equal
echo "<br>";
$len = str_pad($str,20,"-",STR_PAD_BOTH);
echo strlen($len);//20
echo "<br>";
?>