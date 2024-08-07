<?php

class abc{

    private $data = ["name"=>"Deepanker Tiwari", "course"=> "PHP"];

    public function __get($key){
        if(array_key_exists($key,$this->data)){
            return $this->data[$key];
        }
        else{
            return "Key not found";
        }
    }
}

$test= new abc();
echo $test->course;
echo"<br>";
echo $test->name;

?>