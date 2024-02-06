<?php
function bubbleSort($array) {
    $n = count($array);

    for ($i = 0; $i < $n - 1; $i++) {
        //$n-$i-$1 // Avoid comparing the last element in each pass, as it's already sorted as per bubble sort working.
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Swap if the element found is greater than the next element
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}


$arrayToSort = [64, 34, 25, 12, 22, 11, 90];
$sortedArray = bubbleSort($arrayToSort);

echo "Original array: " . implode(", ", $arrayToSort) . "<br>";
echo "Sorted array: " . implode(", ", $sortedArray) . "<br>";
?>
