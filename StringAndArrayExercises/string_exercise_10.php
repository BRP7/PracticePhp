<?php
function calculateFactorial($number) {
    // Base case: factorial of 0 is 1
    if ($number == 0) {
        return 1;
    } else {
        // Recursive case: n! = n * (n-1)!
        return $number * calculateFactorial($number - 1);
    }
}

$testNumber = 5; 
$factorialResult = calculateFactorial($testNumber);

echo "The factorial of {$testNumber} is: {$factorialResult}";
?>
