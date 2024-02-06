<!-- Method overloading in PHP is achieved using the __call() and __callStatic() magic methods. 
These methods are triggered when attempting to invoke inaccessible methods in an object context and a static context, respectively. -->

<!-- In PHP, static variables and static methods are associated with a class rather than an instance of the class. They are shared among all instances of the class
 and can be accessed using the class name without creating an object. -->
<?php
    class MethodTest
    {
        public function __call($name, $arguments)
        {
            // Note: value of $name is case sensitive.
            echo "Calling object method '$name' " . implode(', ', $arguments) . "<br>";
        }

        public static function __callStatic($name, $arguments)
        {
            // Note: value of $name is case sensitive.
            echo "Calling static method '$name' " . implode(', ', $arguments) . "<br>";
        }
    }

    $obj = new MethodTest;
    $obj->runTest('in object context');

    MethodTest::runTest('in static context');
?>