<?php 
    class Calculator
    {
        public $a,$b,$res;

        public function __construct($a,$b)
        {
            $this->a = $a;
            $this->b = $b;
        }
        public function add()
        {
            $res=$this->a+$this->b;
            // $res = 10;
            return $res;
            // echo $this->a;
            // echo $this->b;

        }
        // public function subtract($a,$b)
        // {
        //     echo "Subtraction is : ";
        //     return $a-$b;
        // }
        // public function multiply($a,$b)
        // {
        //     echo "Multiplication is : ";
        //     return $a*$b;
        // }
        // public function divide($a,$b)
        // {
        //     echo "Division is : ";
        //     if ($b != 0) 
        //         return $a / $b;
        //     else 
        //         return "Cannot divide by zero";
            
        // }
    }
$calculator=new Calculator(3,5);
echo $calculator->add();
// echo $calculator->subtract(8,2)."<br>";
// echo $calculator->multiply(4,10)."<br>";
// echo $calculator->divide(4,0)."<br>";
?>