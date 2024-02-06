<?php

class MyClassDes {
    public function __destruct() {
        echo "Object destroyed";
    }
    public function greet() {
        echo "Hello World</br>";
    }
}

// Creating an instance of MyClass
$obj = new MyClassDes();
$obj->greet();
?>