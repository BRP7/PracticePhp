<!-- In PHP, static variables and static methods are associated with a class rather than an instance of the class.
They are shared among all instances of the class and can be accessed using the class name without creating an object. -->

<?php
    class MyClass {
        static $myStaticVar = 0;
        static function myStaticMethod() {
           echo "static method called!";
        }
    }
    
    // <!-- It is shared among all instances of the class.
    // It can be accessed using the class name followed by the double colon (::). -->
    
    
    // Accessing static variable
    echo MyClass::$myStaticVar;  // Output: 0
    
    // Modifying static variable
    MyClass::$myStaticVar = 10;
    echo MyClass::$myStaticVar;  // Output: 10

    // Calling static method
    MyClass::myStaticMethod();
     
    
?>