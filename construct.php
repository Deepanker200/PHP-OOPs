<?php

class person{
    public $name, $age;

    function __construct($name="No name",$age=0){
        $this->name=$name;
        $this->age=$age;
        
    }

    function show(){
        echo $this-> name. " - ". $this->age ."<br>";
    }
}

$p1=new person("Deepanker",21);
$p2=new person("Shubham",14);

$p1->show();
$p2->show();


?>