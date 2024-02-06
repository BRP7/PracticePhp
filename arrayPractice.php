<?php

//1. - Creates a new array.
// array() or []:
$arr = array();
$arr=[];

$arrOne = array(1,2,3);
$arrTwo=[5,4,6];

// 2- Merges two or more arrays.
array_merge($array1, $array2):
print_r (array_merge($arrOne,$arrTwo));
//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 5 [4] => 4 [5] => 6 )

// 3. array_combine($keys, $values):
// - Creates an array by using one array for keys and another for its values.

print_r(array_combine($arrOne,$arrTwo));//Array ( [1] => 5 [2] => 4 [3] => 6 )
$strArrOne=["hii","how","are","you"];
$strArrTwo=["I","am","fine","& you"];

// print_r(array_combine($strArrOne,$strArrTwo));//Array ( [hii] => I [how] => am [are] => fine [you] => & you )


$strArrOne=["hii","how","are","you"];
$strArrTwo=["I","am","fine"];
// print_r(array_combine($strArrOne,$strArrTwo));//($keys) and argument #2 ($values) must have the same number of elements 


$strArrOne=["hii","are","you"];
$strArrTwo=["I","am","fine","& you"];
// print_r(array_combine($strArrOne,$strArrTwo));//($keys) and argument #2 ($values) must have the same number of elements

// 4. range($start, $end, $step(op,1)):
// - Creates an array containing a range of elements.

$arrOne=range(1,5,3);
// print_r($arrOne);//Array ( [0] => 1 [1] => 4 )
////1->start then 1+3=4->next elemnt .....
$arrOne=range(1,5,1);//Array ( [0] => 1 [1] => 3 [2] => 5 )
// print_r($arrOne);//Array ( [0] => 1 [1] => 4 )
$arrOne=range(1,5);
// print_r($arrOne);//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

$letter = range("a","d");
print_r ($letter);
//Array ( [0] => a [1] => b [2] => c [3] => d )

// 2. Array Modification:

    // 5. array_push($array, $element) or $array[] = $element:
    //array_push(array, value1(op), value2(op), ...)
    //output in same array 
    //    - Adds one or more elements to the end of an array.
    //Even if your array has string keys, your added elements will always have numeric keys

     $pushArr=array_push($arr,3);
     print_r($pushArr);//1
     print_r($arr);//Array ( [0] => 3 )

     $a=array("a"=>"red","b"=>"green");
     array_push($a,"blue","yellow");
     print_r($a);//Array ( [a] => red [b] => green [0] => blue [1] => yellow )//Even if your array has string keys, your added elements will always have numeric keys

    // 6. array_pop($array):
    //    - Removes the last element from an array. & returns it!
    print_r(array_pop($arr));//3


    // 7. array_unshift($array, $element):
    //array_unshift(array, value1(op), value2(OP), value3(OP), ...)
    //Numeric keys will start at 0 and increase by 1. String keys will remain the same.
    //    - Adds one or more elements to the beginning of an array.
      $a=array("a"=>"red","b"=>"green");
      print_r(array_unshift($a,"blue"));//3 length of an array 

      print_r(array_unshift($arr,5));//2//array_unshift(), indicating the new number of elements in the array.
      print_r($arr);//Array ( [0] => 5 [1] => 3 )
      print_r(array_unshift($arr,5,76,89));//5 Array ( [0] => 5 [1] => 76 [2] => 89 [3] => 5 [4] => 3 )


    // 8. array_shift($array):
    // - Removes the first element from an array.
    // If the keys are numeric, all elements will get new keys, starting from 0 and increases by 1
    $a=array(0=>"red",1=>"green",2=>"blue");
    echo array_shift($a)."<br>";
    print_r ($a);
    //red
    //Array ( [0] => green [1] => blue ) 
    print_r($arr);//Array ( [0] => 3 )
    echo "<br>";
    print_r(array_shift($arr));//3
    echo "<br>";
    print_r($arr);//Array ()


    // 9. array_splice($array, $start, $length, $replacement):
    //-  used to remove a portion of an array and replace it with something else. 
    // It can be used to add, remove, or replace elements in an array. 
    // The array_splice() function removes selected elements from an array and replaces it with new elements. 
    // The function also returns an array with the removed elements.
    $originalArray = [1, 2, 3, 4, 5];

    // // Using array_splice to replace elements starting from index 1
    $replacement = [10, 11, 12];
    array_splice($originalArray, 1, count($originalArray), $replacement);
    print_r($originalArray);//Array ( [0] => 1 [1] => 10 [2] => 11 [3] => 12 )

    // If the function does not remove any elements (length=0), the replaced array will be inserted from the position of the start parameter 
    $a1=array("0"=>"red","1"=>"green");
    $a2=array("0"=>"purple","1"=>"orange");
    array_splice($a1,1,0,$a2);
    print_r($a1);//Array ( [0] => red [1] => purple [2] => orange [3] => green ) //new array included from index 1 

    // 10. count($array):
    //  - Counts the number of elements in an array.
      echo count($strArrOne);//3
    
    // 11. sizeof($array):
    // - Alias of count().
      echo sizeof($strArrOne);//3

    $myArray = [1, 2, 3, 4, 5];

    // Using count()
    $countUsingCount = count($myArray);

    // Using sizeof()
    $countUsingSizeof = sizeof($myArray);

    echo "Count using count(): $countUsingCount\n";
    echo "Count using sizeof(): $countUsingSizeof\n";
  //In PHP, count() and sizeof() are essentially the same function, they have identical behavior.
  //Count using count(): 5 Count using sizeof(): 5
  

//   12. array_key_exists($key, $array):
//   - Checks if the given key or index exists in the array.//returns true if exist and false if not

$array = array("a" => 1, "b" => 2, "c" => 3);

// Check if the key 'b' exists in the array
if (array_key_exists("b", $array)) {
    echo "Key 'b' exists in the array.<br>";
} else {
    echo "Key 'b' does not exist in the array.<br>";
}

// // Check if the key 'd' exists in the array
if (array_key_exists("d", $array)) {
    echo "Key 'd' exists in the array.<br>";

} else {
    echo "Key 'd' does not exist in the array.<br>";
}

    // 13. array_keys($array):
   // - Returns all the keys or a subset of the keys of an array.

   // Example array-it returns an array 
        $array = array("a" => 1, "b" => 2, "c" => 3, "d" => "2");

        // Get all keys of the array
        $allKeys = array_keys($array);

        // Get keys with a specific value (e.g., 2)
        $keysWithValueTwo = array_keys($array, 2);

        // Get keys with a specific value (e.g., 2)//true type & value both evaluated & false only value
        $keysWithValueTwo = array_keys($array, 2, true);

        // Display the results
        echo "All keys: ";
        print_r($allKeys);//returns array of key => All keys: Array ( [0] => a [1] => b [2] => c [3] => d ) 

        echo "Keys with value 2: ";
        print_r($keysWithValueTwo);//Keys with value 2: Array ( [0] => b [1] => d )

        // 14. array_values($array):
        // - Returns all the values of an array.
        // Example array

        $array = array("a" => "abc", "b" => "pqr", "c" => "xyz");

         // Get all values of the array
         $allValues = array_values($array);

         // Display the results
        echo "All values: ";
        print_r($allValues);//All values: Array ( [0] => abc [1] => pqr [2] => xyz )


            // 4. Array Search:

            // 15. in_array($needle, $haystack):
            // - Checks if a value exists in an array.
            // If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.

                
            $array = array("apple", "banana", "orange", "grape");
            if (in_array("banana", $array)) {
                echo "The value 'banana' exists in the array.<br>";
            } else {
                echo "The value 'banana' does not exist in the array.<br>";
            }
  
            if (in_array("pear", $array)) {
                echo "The value 'pear' exists in the array.<br>";
            } else {
                echo "The value 'pear' does not exist in the array.<br>";
            }
            //The value 'banana' exists in the array.
            //The value 'pear' does not exist in the array.



            // 16. array_search($needle, $haystack):
            //array_search(value, array, strict(op,false))//true "5" != 5
            //- Searches an array for a given value and returns the corresponding key.

            $array = array("apple", "banana", "orange", "grape");
            $keyOfBanana = array_search("banana", $array);
            echo "Key of 'banana': $keyOfBanana<br>";//Key of 'banana': 1
            $keyOfPear = array_search("pear", $array);
            echo "Key of 'pear': $keyOfPear<br>";//Key of 'pear':




            // 17. array_reverse($array):
            //array_reverse(array, preserve(op))//Specifies if the function should preserve the keys of the array or not.
            //  - Returns an array with elements in reverse order.

            $array = array("apple", "banana", "orange", "grape");
            $reversedArray = array_reverse($array);
            echo "Original array: ";
            print_r($array);//Original array: Array ( [0] => apple [1] => banana [2] => orange [3] => grape )
            echo "Reversed array: ";
            print_r($reversedArray);//Reversed array: Array ( [0] => grape [1] => orange [2] => banana [3] => apple )

            $a=array("Volvo","XC90",array("BMW","Toyota"));//inside array doesn't sort and it comes first no matter what
            $reverse=array_reverse($a);
            $preserve=array_reverse($a,true);

            print_r($a);
            echo "<br>";
            print_r($reverse);
            echo "<br>";
            print_r($preserve);

            //Array ( [0] => Volvo [1] => XC90 [2] => Array ( [0] => BMW [1] => Toyota ) )
            //Array ( [0] => Array ( [0] => BMW [1] => Toyota ) [1] => XC90 [2] => Volvo )
            //Array ( [2] => Array ( [0] => BMW [1] => Toyota ) [1] => XC90 [0] => Volvo )



            // 5. Array Sorting:
            $array = array("apple", "banana", "orange", "grape");
            $arrayAsso = array("a" => "abc", "b" => "pqr", "c" => "xyz");

            //sort in array it self and return 1 

        // 18. sort($array):
        //     - Sorts an array.
            echo "Sorts an array:  ";
            print_r(sort($array));//returns 1
            print_r($array);
            // // 19. rsort($array):
            // // - Sorts an array in reverse order.
            echo "<br>Sorts an array in reverse order:  ";
            print_r(rsort($array));
            print_r($array);
            // // 20. asort($array):
            // // - Sorts an associative array by values.
            echo "<br> sorts an associative array by value :";
            print_r(asort($arrayAsso));
            print_r($arrayAsso);
            // // 21. ksort($array):
            // // - Sorts an associative array by keys.
            echo "<br> sorts an associative array by Key :";
            print_r(ksort($arrayAsso));
            print_r($arrayAsso);
            // // 22. arsort($array):
            // // - Sorts an associative array in reverse order by values.
            echo "<br> Sorts an array in reverse order by value:  ";
            print_r(arsort($arrayAsso));
            print_r($arrayAsso);
            // // 23. krsort($array):
            // // - Sorts an associative array in reverse order by keys.
            echo "<br> Sorts an array in reverse order by key:  ";
            print_r(krsort($arrayAsso));
            print_r($arrayAsso);


    //  6. Array Filtering:

        //  24. array_filter(array, callbackfunction(op), flag(op,(key ,val))
        //     - Filters elements of an array using a callback function.
        $numbers = [1, 2, 3, 4, 5];

        // // Example: Filter even numbers
             $filteredNumbers = array_filter($numbers, function ($value) {
                return $value % 2 == 0;
              });
             print_r($filteredNumbers);//Array ( [1] => 2 [3] => 4 )
             echo "<br>";
        //   25. array_map($callback, $array):
        //     - Applies a callback function to each element of an array.
             
        //      // Example: Square each number
             $squaredNumbers = array_map(function ($value) {
                 return $value * $value;
                }, $numbers);
                 print_r($squaredNumbers);
                 echo "<br>";//Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )
        // //  26. array_reduce($array, $callback, $initial):
        // //     - Iteratively reduces the array to a single value using a callback function.

        //         // Example: Sum of all numbers
                $sum = array_reduce($numbers, function ($accumulator, $value) {
                    return $accumulator + $value;
                }, 0);//15
                
                echo $sum;


        // 7. Array Slicing:

        // array_splice changes the original array by removing and possibly replacing elements, while array_slice creates a 
       // new array containing a selected portion of elements from the original array without modifying it.

        // 27. array_slice($array, $offset, $length, $preserve_keys(op,false)):
        // $preserve_keys(op,false)--numeric keys are re-indexed.
        // $preserve_keys(op,true)-- numeric keys are preserved.
        //Slicing refers to extracting a portion of an array, 
        //creating a new array that contains only the selected elements.--NO CHANGE IN ORIGINAL ARRAY
        //     - Extracts a portion of the array.
        $fruits = ["apple", "banana", "cherry", "date", "elderberry"];
        
        // Extract a portion of the array from index 1 to 3
                $portion = array_slice($fruits, 1, 3);
                 //  array_slice($fruits,-2,1);//Array ( [0] => date )
                print_r($portion);//Array ( [0] => banana [1] => cherry [2] => date )
                echo "<br>";
                $portion = array_slice($fruits, 1, 3,true);
                print_r($portion);//Array ( [1] => banana [2] => cherry [3] => date )
                // Output: Array ( [0] => banana [1] => cherry [2] => date )

    //Note: PHP's array_splice modifies the original array in place and doesn't
    // return the removed elements as a new array.
            
        // 28. array_splice($array, $offset, $length, $replacement):
        //     - Removes a portion of the array and replaces it with something else.
        //CHANGE IN ORIGINAL ARRAYa

            $colors = ["red", "green", "blue", "yellow"];

                // Remove 2 elements starting from index 1 and replace with "orange" and "purple"
                $removed = array_splice($colors, 1, 2, ["orange", "purple"]);

                print_r($colors);
                echo "<br>";
                // Output: Array ( [0] => red [1] => orange [2] => purple [3] => yellow )

                print_r($removed);
                // Output: Array ( [0] => green [1] => blue )

?>