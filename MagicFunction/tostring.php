<?php
class MyClass {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function __toString() {
        return 'The data is: ' . $this->data;
    }
}

$obj = new MyClass('Hello, world!');
echo $obj;  // This will automatically call $obj->__toString()//if unable to find __toString()Object of class MyClass could not be converted to string 


?>