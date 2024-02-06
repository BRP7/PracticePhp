<!-- __invoke() magic method allows an object to be used as a function.  -->
<!-- checks if the class of that object has the __invoke() method. If it does, the __invoke() method is automatically called, allowing the object to be used in a callable manner. -->


<?php
class CallableClass {
    public function __construct(){
        echo "constructor called!";
    }
    public function __invoke($arg) {
        echo "Invoked with argument: $arg\n";
    }
}

$obj = new CallableClass();
$obj('Hello, world!'); // This will automatically call $obj->__invoke()

?>