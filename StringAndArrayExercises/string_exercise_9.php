<?php
// function generateFibonacci($terms) {
//     $fibonacciSequence = [];

//     if ($terms >= 1) {
//         $fibonacciSequence[] = 0;
//     }
//     if ($terms >= 2) {
//         $fibonacciSequence[] = 1;
//     }

//     for ($i = 2; $i < $terms; $i++) {
//         $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
//     }
//     return $fibonacciSequence;
// }

// $numberOfTerms = 10; 
// $fibonacciResult = generateFibonacci($numberOfTerms);

// echo "Fibonacci sequence up to {$numberOfTerms} terms: " . implode(", ", $fibonacciResult);

echo "<br>";
echo "<br>";
echo "<br>";


//3
function generateFibonacciSeq($terms) {
    $fibonacciSequence = [0, 1];

    for ($i = 2; $i < $terms; $i++) {
        $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    return $fibonacciSequence;
}

$numberOfTerms = 10; 
$fibonacciResult = generateFibonacciSeq($numberOfTerms);

print_r($fibonacciResult);//Array ( [0] => 0 [1] => 1 [2] => 1 [3] => 2 [4] => 3 [5] => 5 [6] => 8 [7] => 13 [8] => 21 [9] => 34 )

// echo "Fibonacci sequence up to {$numberOfTerms} terms: " . implode(", ", $fibonacciResult);


//3
$first_num = 0;  
$second_num = 1;  
$n = 10; // Number of elements you want in the series
echo "Fibonacci Series: $first_num, $second_num";  

for($i = 2; $i < $n; $i++) {  
    $next_num = $first_num + $second_num;  
    echo ", $next_num";  
    $first_num = $second_num;  
    $second_num = $next_num;  
}  



?>
