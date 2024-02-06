<?php
class MyClass {
    private $privateData;
    public $publicData;

    public function __construct($privateData, $publicData) {
        $this->privateData = $privateData;
        $this->publicData = $publicData;
    }

    public function __sleep() {
        return ['publicData'];  // Only serialize the publicData property
    }

    public function __wakeup() {
        echo "Wake method called!!";
        echo "</br>";
    }
}

$obj = new MyClass('privateValue', 'publicValue');

// Serialize the object
$serialized = serialize($obj);
print_r($serialized);
echo "</br>";

// Unserialize the object
$unserialized = unserialize($serialized);
print_r($unserialized);

?>