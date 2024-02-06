<?php
for($i=0;$i<=5;$i++){

     for($j=5;$j>=0;$j--){
       if($j==$i){
        break;
      }
    echo $j;
     }
     echo "<br>";
}

for($i=1;$i<=5;$i++){

  for($j=5;$j>=0;$j--){
    if($j>=$i){
     
      echo $j;
   }
  }
  echo "<br>";
}

?>