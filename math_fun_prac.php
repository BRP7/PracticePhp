<?php

// Basic Arithmetic
$number = -5.75;

// abs() - Returns the absolute value of a number
$absResult = abs($number);
echo "abs($number) = $absResult<br>";

// ceil() - Rounds a number up to the nearest integer
$ceilResult = ceil($number);
echo "ceil($number) = $ceilResult<br>";

// floor() - Rounds a number down to the nearest integer
$floorResult = floor($number);
echo "floor($number) = $floorResult<br>";

// round() - Rounds a number to the nearest integer or specified number of decimal places
$roundedResult = round($number, 1);
echo "round($number, 1) = $roundedResult<br>";//round(-5.75, 1) = -5.8

$roundedResult = round($number, 2);//round(-5.75, 1) = -5.75
echo "round($number, 1) = $roundedResult<br>";

$roundedResult = round($number, 3);//round(-5.75, 1) = -5.75
echo "round($number, 1) = $roundedResult<br><br>";
// Power Functions
$base = 2;
$exponent = 3;

// pow() - Returns the value of a base raised to the power of an exponent
$powResult = pow(3, -1);
echo "pow(3,-1) = $powResult<br>";//pow(3,-1) = 0.33333333333333

$powResult = pow($base, $exponent);
echo "pow($base, $exponent) = $powResult<br>";//pow(2, 3) = 8


// sqrt() - Returns the square root of a number
$sqrtResult = sqrt($powResult);
echo "sqrt($powResult) = $sqrtResult<br><br>";//sqrt(8) = 2.8284271247462


// Random Number Generation
$min = 10;
$max = 50;

$randomResult = rand($min, $max);
echo "rand($min, $max) = $randomResult<br><br>";

$min = -10;
$max = 0;

$randomResult = rand($min, $max);
echo "rand($min, $max) = $randomResult<br><br>";//rand(-10, 0) = -4


// Number Formatting
$numberToFormat = 1234567.89;
$decimals = 2;
$decimal_point = '.';
$thousands_separator = ',';

// number_format() - Formats a number with grouped thousands and a specified number of decimals
$formattedNumber = number_format($numberToFormat, $decimals, $decimal_point, $thousands_separator);
echo "number_format($numberToFormat, $decimals, '$decimal_point', '$thousands_separator') = $formattedNumber<br>";

$numberToFormat = 1234567.89;
$decimals = 5;
$decimal_point = '.';
$thousands_separator = ',';

// number_format() - Formats a number with grouped thousands and a specified number of decimals
$formattedNumber = number_format($numberToFormat, $decimals, $decimal_point, $thousands_separator);
echo "number_format($numberToFormat, $decimals, '$decimal_point', '$thousands_separator') = $formattedNumber<br>";//number_format(1234567.89, 5, '.', ',') = 1,234,567.89000

$newNumFormate = number_format(123.45,0);//last two is optional parameter
echo "new number format: $newNumFormate";//new number format: 123
?>
