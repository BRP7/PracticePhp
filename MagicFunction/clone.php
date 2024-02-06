<?php
    class student{
        public $name;
        public $course;
        public function __construct($n){
            $this->name = $n;
        }
        public function setCourse(course $c){
            $this->course = $c;
        }
        public function __clone(){
            $this->course = clone $this->course;
        }
        // without clone method -> student Object ( [name] => Yahoo Baba [course] => course Object ( [cname] => Python ) )
        //student Object ( [name] => Ram Kumar [course] => course Object ( [cname] => Python ) )
    }
    class course{
        public $cname;
        public function __construct($cn){
            $this->cname = $cn;
        }
    }
    $student1 = new student('Yahoo Baba');
    $course1 = new course('PHP');

    $student1->setCourse($course1);

    // $student2 = $student1;
    $student2 = clone $student1;

    $student2->name = 'Ram Kumar';
    $student2->course->cname =  'Python';

    print_r($student1);
    echo "</br>";
    print_r($student2);
?>