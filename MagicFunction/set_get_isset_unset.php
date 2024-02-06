<?php

class ExampleOne {
        // No explicit definition for property1
    }
    
    $object = new ExampleOne();
    
    // Setting a property (creates property1 dynamically)
    $object->property1 = 123;//A property is a member variable of a class. It represents an attribute or a piece of data associated with an object.
    
    // Getting a property (accessing property1 dynamically)
    echo $object->property1;  // Outputs: 123 //without set --> Undefined property: 


    
    // class Example {
    //     private $data = [];
    
    //     public function __set($name, $value) {
    //         echo "Setting '$name' to '$value'\n";//when writing data to inaccessible (protected or private) or non-existing properties.
    //         $this->data[$name] = $value;
    //     }
    
    //     public function __get($name) {
    //         echo "Getting '$name'\n";// is utilized for reading data from inaccessible (protected or private) or non-existing properties.
    //         return $this->data[$name] ?? null;
    //     }
    
    //     public function __isset($name) {
    //         echo "Is '$name' set?\n";//is triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties.
    //         return isset($this->data[$name]);
    //     }
    
    //     public function __unset($name) {
    //         echo "Unsetting '$name'\n";// is invoked when unset() is used on inaccessible (protected or private) or non-existing properties.
    //         unset($this->data[$name]);
    //     }
    // }
    
    // $example = new Example();
    
    // // Set
    // $example->property1 = 123;
    
    // // Get
    // echo $example->property1;
    
    // // Isset
    // isset($example->property1);
    // isset($example->property2);
    
    // // Unset
    // unset($example->property1);
    // unset($example->property2);


$variable = "Hello";
$array = ['key' => 'Value'];

// isset() example
if (isset($variable)) {
    echo "Variable is set.\n";
} else {
    echo "Variable is not set.\n";
}

// unset() example
unset($variable);
if (isset($variable)) {
    echo "Variable is set.\n";
} else {
    echo "Variable is not set.\n";
}

// isset() on array element
if (isset($array['key'])) {
    echo "Array element is set.\n";
} else {
    echo "Array element is not set.\n";
}

// unset() on array element
unset($array['key']);
if (isset($array['key'])) {
    echo "Array element is set.\n";
} else {
    echo "Array element is not set.\n";
}


    ?>