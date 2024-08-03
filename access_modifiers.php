<?php

class base{ 
    private $name;

    public function __construct($n){
        $this->name = $n;
    }

    public function show(){
        echo "Your Name: ".$this->name. "<br>";
    }
}


class derived extends base{
    public function get(){
        echo "Hello, ".$this->name. "<br>";
    }
}

$test = new base("Deepanker Tiwari");

// $test->name="Tiwari Deepanker";             //Overriding of Value

$test->show();

?>