<?php 
    class Calculator
    {
        public function add($a,$b)
        {
            echo "Addition is : ";
            return $a+$b;
        }
        public function subtract($a,$b)
        {
            echo "Subtraction is : ";
            return $a-$b;
        }
        public function multiply($a,$b)
        {
            echo "Multiplication is : ";
            return $a*$b;
        }
        public function divide($a,$b)
        {
            echo "Division is : ";
            if ($b != 0) 
                return $a / $b;
            else 
                return "Cannot divide by zero";
            
        }
    }
$calculator=new Calculator();
echo $calculator->add(5,3)."<br>";
echo $calculator->subtract(8,2)."<br>";
echo $calculator->multiply(4,10)."<br>";
echo $calculator->divide(4,0)."<br>";

?>