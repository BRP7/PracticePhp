<?php
    class Student
    {
        public $name;
        public $age;
        public $grade;

        public function displayInfo()
        {
            echo "Name: $this->name, Age: $this->age, Grade: $this->grade";
        }
        // function __construct($name,$age,$grade)
        // {
        //     $this->name=$name;
        //     $this->age=$age;
        //     $this->grade=$grade;
        // }
    }
// $student1=new Student("Shreya",22,"B");
// echo $student1->displayInfo();


$student=new Student();
$student->name="Karna";
$student->age=23;
$student->grade="A";
$student->displayInfo();
?>