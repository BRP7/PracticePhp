<?php


$length = 11;
for ($i = 1; $i <= $length; $i++) {
    for ($j = 1; $j <= $length; $j++) {

        // if($j >= $i){//front numbers are removed
        //     echo $j;
        // }

        // if($j <= 11 -$i){//back numbers are removed
        //     echo $j;
        // }
        if ($j >= $i && $j <= $length - $i + 1) {
            echo "$j ";
        } else {
            echo "- ";
        }
    }
    if($i >= $length/2){
        echo "<br>";
        break;
    }
    echo "<br>";
}

for ($i = $length - 1; $i >= 1; $i--) {
    if($i >= $length/2){
        continue;
    }
    for ($j = 1; $j <= $length; $j++) {
        if ($j >= $i && $j <= $length - $i + 1) {
            echo "$j ";
        } else {
            echo "- ";
        }
    }
    echo "<br>";
}





// // Nested for loop to print the specified pattern
// for ($i = 1; $i <= 10; $i++) {
//     for ($j = 1; $j <= 10; $j++) {
//         if ($j >= $i && $j <= 10 - $i + 1) {
//             echo "$j ";
//         } else {
//             echo "- ";
//         }
//     }

//     if ($i < 10) {
//         for ($k = 10 - $i; $k >= 1; $k--) {
//             echo "- ";
//         }
//     }

//     echo "<br>";
// }



?>
