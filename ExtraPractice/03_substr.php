<?php
// string,startPosOfSubString,LengthOfSubStr(Optinal)(space counted)
echo substr("Hello world",0,10)."<br>";//Hello worl
echo substr("Hello world",1,8)."<br>";//ello wor
echo substr("Hello world",0,5)."<br>";//Hello
echo substr("Hello world",6,6)."<br>";//World //do nothing if length is more then char paresent
echo substr("Hello world",5,6)."<br>";//World //do nothing if length is more then char paresent
echo substr("Hello world",5,5)."<br>";//Worl it count space but doesn't print it //do nothing if length is more then char paresent

echo substr("Hello world",0,-1)."<br>";//-length means how many char removed from back//Hello worl
echo substr("Hello world",-10,-2)."<br>";//Khali ganvanu j backword chhe -1 thi start kari ne -10 sudhi ne length last mathi 2 kadhi levana - chhe atle start from -10 position backword and -2 means remove 2 length character
echo substr("Hello world",0,-6)."<br>";//Hello
?>