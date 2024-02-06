<pre>
    <?php
    class A
    {
        public $i = 0;
        public function inc()
        {
            $this->i++;
        }
        public function reset()
        {
            $this->i = 10;
        }
    }

    $obj1 = new A();
    print_r($obj1);

    $obj1->inc();
    print_r($obj1);

    $obj1->reset();
    $obj1->i = 10;

    $obj2 = new A();
    $obj2->inc();

    print_r($obj1);
    $obj1->inc();
    //print_r($obj1);
    print_r($obj2);