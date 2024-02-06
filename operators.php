<?php
// // Arithmetic Operators
$a = 10;
// $b = 5;

// // // 1. Addition
// $sum = $a + $b;
// echo "1. Addition: $sum <br>";

// // // 2. Subtraction
// $difference = $a - $b;
// echo "2. Subtraction: $difference <br>";

// // // 3. Multiplication
// $product = $a * $b;
// echo "3. Multiplication: $product <br>";

// // // 4. Division
// $quotient = $a / $b;
// echo "4. Division: $quotient <br>";

// // // 5. Modulus (Remainder)
// $remainder = $a % $b;
// echo "5. Modulus (Remainder): $remainder <br>";

// // // 6. Exponentiation (PHP 5.6 and later)
// $exponential = $a ** $b;
// echo "6. Exponentiation: $exponential <br><br>";

// // // Assignment Operators
// // 7. Assignment
// $Assignment = $a;
// echo "7. Assignment: $assignment <br>"; 

// $num=8;
// // 8. Addition Assignment
// $num += $b;//$num=13
// echo "8. Addition Assignment: $num <br>";


// // 9. Subtraction Assignment
// $num -= $b; //13-5=8->$num
// echo "9. Subtraction Assignment: $num <br>";

// // 10. Multiplication Assignment
// $num *= $b;//8*5
// echo "10. Multiplication Assignment: $num <br>";

// // 11. Division Assignment
// $num /= $b;//8
// echo "11. Division Assignment: $num <br>";

// // 12. Modulus Assignment
// $num %= $b;//8%5=3
// echo "12. Modulus Assignment: $num <br><br>";

// Comparison Operators
// 13. Equal
// $equal = (3 == "3");//only checks for value
// echo "13.(1) Equal: $equal <br>";// Equal: 1

// // 14. Identical
// $identical = (3 === "3");////it will check datatype & value both & return true if only both are true
// echo "14. Identical: $identical <br>";//// Equal: ////nothing printed as it was falses

// // 15. Not Equal
// $notEqual = (4 != 3); //($a <> $b);
// echo "15. Not Equal: $notEqual <br>";//1 as both values are different

// // 16. Not Identical
// $notIdentical = (4 !== "4");//1 as both values & datatype of value are different 
// echo "16. Not Identical: $notIdentical <br>";//Not Identical: 1

// 17. Greater Than
// $greaterThan = ($a > $b);
// echo "17. Greater Than: $greaterThan <br>";// Greater Than: 1

// // 18. Less Than
// $lessThan = ($a < $b);
// echo "18. Less Than: $lessThan <br>";// No o/p as it is not true

// 19. Greater Than or Equal To
// $greaterOrEqual = ($a >= $b);
// echo "19. Greater Than or Equal To: $greaterOrEqual <br>";//19. Greater Than or Equal To: 1

// // 20. Less Than or Equal To
// $lessOrEqual = (4 <= 3);
// echo "20. Less Than or Equal To: $lessOrEqual <br><br>";//20. Less Than or Equal To:

// *********Logical Operators*********
// 21. Logical AND--The result of the logical AND operation will be true if both $a and $b are non-zero.
// $logicalAnd = ($a && $b);
// echo "21. Logical AND: $logicalAnd <br>";//21. Logical AND: 1

// // 22. Logical OR -- operator returns true if at least one of $a or $b is non-zero.
// $logicalOr = ($a || $b);
// echo "22. Logical OR: $logicalOr <br>";//22. Logical OR: 1

// // 23. Logical NOT --If $a is a non-zero number,The logical NOT will then make it false.
// $logicalNot = !$a;
// echo "23. Logical NOT: $logicalNot <br><br>";//23. Logical NOT:



// Increment and Decrement Operators
// 24. Increment
// $increment = ++$a; 
// echo "24.1 Increment: $increment a: $a<br>";//$increment=11 $a=11

// $increment = $a++; // (post increment)
// echo "24.2 Increment: $increment a: $a <br>";//$increment=11 $a=12

// // 25. Decrement
// $decrement = --$a; // or $a--(post decrement)//$decrement=11 $a=11
// echo "25.1 Decrement: $decrement a: $a <br>";

// $decrement = $a--; // or $a--(post decrement)//$decrement=11 $a=10
// echo "25.2 Decrement: $decrement a: $a <br><br>";


// ***************String Operators********************************
// 26. Concatenation
// $stringConcatenation = "Hello" . "World";
// echo "26. Concatenation: $stringConcatenation <br>";

// // 27. Concatenation Assignment
// $stringConcatenationAssignment = $a .= $b;//$a= Concatenation Assignment= 105
// echo "27. Concatenation Assignment: $stringConcatenationAssignment <br><br>";


// Assuming $arr1, $arr2, and $arr3 are previously defined arrays.

// For example:
$arr1 = [1, 2, 6];//index same chhe
$arr2 = [3, 4, 5,9];
$array1=array(1,2);
$array2=array(1,2);
$arr3 = ["apple", "orange", "banana"];

// Array Operators
// 28. Union--different from the array merge function (array_merge()), which would include all occurrences of duplicate values from both arrays. 
//The union operator is a quick way to create a new array with unique values by preserving the order of the elements from the first array.
$union = $arr1 + $arr2; //+++++++++++doubt+++++++++++++++++++++++++++
echo "28. Union: ";
print_r($union);//28. Union: Array ( [0] => 1 [1] => 2 [2] => 6 )
echo "<br>";

$union = "2" + "3"; //+++++++++++doubt+++++++++++++++++
// echo "28. Union: ";//28. Union: 5
// print_r($union);
echo "<br>";

// 29. Equality
// $arrayEquality = ($arr1 == $arr2);
// echo "29. Equality: ";
// var_dump($arrayEquality);//29. Equality: bool(false)
// $arrayEquality = ($array1 == $array2);
// echo "29. Equality: ";
// var_dump($arrayEquality);//29. Equality: bool(true)
// echo "<br>";

// // // 30. Identity
// $arrayIdentity = ($arr1 === $arr2);
// echo "30. Identity: ";
// var_dump($arrayIdentity);//30. Identity: bool(false)
// echo "<br>";

// $arrayIdentity = ($array1 === $array2);
// echo "30. Identity: ";
// var_dump($arrayIdentity);//30. Identity: bool(true)
// echo "<br>";

// // 31. Inequality
// $arrayInequality = ($arr1 != $arr2) or ($arr1 <> $arr2);
// echo "31. Inequality: ";
// var_dump($arrayInequality);//31. Inequality: bool(true) they are not same 
// echo "<br>";

// // 32. Non-identity
// $arrayNonIdentity = $arr1 !== $arr2;
// echo "32. Non-identity: ";
// var_dump($arrayNonIdentity);
// echo "<br><br>";

// Conditional (Ternary) Operator
// // 33. Ternary
// // $arr1=[];//if this then 3rd arr3 will execute & o/p=33. Ternary: Array ( [0] => apple [1] => orange [2] => banana )else
// $ternaryResult = ($arr1 ? $arr2 : $arr3);
// echo "33. Ternary: ";
// print_r($ternaryResult);//33. Ternary: Array ( [0] => 3 [1] => 4 [2] => 5 )
// echo "<br><br>";

// // Null Coalescing Operator
// 34. Null Coalescing
// $nullCoalescing = null ?? $arr2;
// echo "34. Null Coalescing: ";
// print_r($nullCoalescing);//Null Coalescing: Array ( [0] => 3 [1] => 4 [2] => 5 )
// echo "<br><br>";

// // Type Operators
// // 35. Type Of
// $typeOfArr1 = gettype($arr1);
// echo "35. Type Of: $typeOfArr1 <br>";//35. Type Of: array



// For example:
$str1 = "Hello";
$str2 = "";
$num1 = 42;
$num2=0;
$bool = true;

// // Logical AND with strings
// $logicalAndStr = ($str1 && $str2);
// echo "Logical AND with strings: $logicalAndStr <br>";

// $logicalAndNum = ($num1 && $num2);
// echo "Logical AND with number: $logicalAndNum <br>";

// $logicalAndNumAndStr = ($str2 && $num2);
// echo "Logical AND with number: $logicalAndNumAndStr <br>";

// // Logical OR with numbers
// $logicalOrNum = ($num1 || $str2);
// echo "Logical OR with numbers: $logicalOrNum <br>";

// // Logical NOT with booleans
// $logicalNotBool = !$bool;
// echo "Logical NOT with booleans: $logicalNotBool <br><br>";
?>
