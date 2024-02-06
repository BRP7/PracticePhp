<pre>
<?php
class A{
   public $a=10;
    function test(){
        $this->b;
        return $this;
    }
}

$obj = new A();
print_r($obj);
?>