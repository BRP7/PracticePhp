<?php

// Data types demonstration using var_dump

// 1. Integer
$integerVar = 42;
// echo "Integer:";
// var_dump($integerVar);
// echo "<br>";

// // 2. Float
$floatVar = 3.14;
// echo "Float:";
// var_dump($floatVar);
// echo "<br>";

// // 3. String
$stringVar = "Hello, PHP!";
// echo "String:";
// var_dump($stringVar);
// echo "<br>";

// // 4. Boolean
$boolVar = true;
// echo "Boolean:";
// var_dump($boolVar);
// echo "<br>";

// // 5. Array
$arrayVar = array(1, 2, 3, "PHP");
// echo "Array:";
// var_dump($arrayVar);
// echo "<br>";

// // 6. NULL
$nullVar = null;
// echo "NULL:";
// var_dump($nullVar);
// echo "<br>";


// Type Casting demonstration


// Convert to string
$intToString = (string) $integerVar;
echo "Integer to String:";
var_dump($intToString);
echo "<br>";

// Convert to integer
$floatToInt = (int) $floatVar;
echo "float to Integer:";
var_dump($floatToInt);
echo "<br>";

// Convert to float
$stringToFloat = (float) $stringVar;
echo "String to Float:";
var_dump($stringToFloat);//String to Float:float(0)
echo "<br>";

// Convert to boolean
$intToBool = (bool) $integerVar;
echo "Integer to Boolean:";
var_dump($intToBool);//true
echo "<br>";

// Convert to array
$stringToArray = (array) $stringVar;
echo "String to Array:";
var_dump($stringToArray);//String to Array:array(1) { [0]=> string(11) "Hello, PHP!" }
echo "<br>";

// $arrayToString = (string) $arrayVar;
// echo "String to Array:";
// var_dump($stringToArray);//Array To String --Warning: Array to string conversion in C
// echo "<br>";

// Convert to NULL
// $boolToNull = (unset) $boolVar;
// echo "Boolean to NULL:";
// var_dump($boolToNull);
// echo "<br>";//Fatal error: The (unset) cast is no longer supported in**

//OUTPUT

// Integer:int(42)
// Float:float(3.14)
// String:string(11) "Hello, PHP!"
// Boolean:bool(true)
// Array:array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> string(3) "PHP" }
// NULL:NULL
// Integer to String:string(2) "42"
// Float to Integer:int(3)
// String to Float:float(0)
// Integer to Boolean:bool(true)
// String to Array:array(1) { [0]=> string(11) "Hello, PHP!" }
?>
