<?php

class base{
   private $name;

    public function __construct($n){
    $this->name=$n;    
}

    public function show(){
        echo  "Your Name : ". $this->name . "<br>";
    }
}

class derived extends base{
    public function get(){
        echo "Your Name : ". $this->name. "<br>";
    }
}


$test=new base("deepanker");

// $test->name= "tiwari deepanker";

$test->show();


?>