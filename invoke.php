<?php

class calculation{
    public $a, $b;
    
    public function __construct($a, $b){
        $this->a= $a;
        $this->b= $b;
    }

    public function sum(){
        echo $this->a + $this->b;
    }

    public function __invoke(){
        echo $this->a + $this->b;
    }

}

$test=new calculation(20,30);

// $test->sum();
$test();


?>