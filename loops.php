<!-- //for : The `for` loop is used when you know in advance how many times the loop should run.   -->
<?php
for($i=0;$i<5;$i++){
     echo "$i <br>";
}

// <!-- While Loop:
//     The `while` loop is used when you don't know in advance how many times the loop should run,
//      and it continues as long as a specified condition is true. -->
$a=3;
while ($a <= 10) {
    echo $a." ";
    $a++;
}//3 4 5 6 7 8 9 10 
echo "<br>";

// <!-- The `foreach` loop is specifically designed for iterating over arrays. -->
// foreach(array as arr)

$strArray = ["apple","banana","chiku"];
foreach ($strArray as $key => $value) {
    echo "$key and value is $value <br>";
}//0 and value is apple
// 1 and value is banana
// 2 and value is chiku

echo "<br>";

foreach($strArray as $arr){
    echo  $arr . " ";
}//apple banana chiku
?>

