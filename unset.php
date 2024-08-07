<?php

class student{
    public $course="PHP";
    private $first_name;
    private $last_name;

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name=$lname;
    }

    public function showName(){
        echo $this->fname ." ". $this->lname;

    }
}

$test=new student();
// $test->setName("Deepanker","Tiwari");

$test->setName("Deepanker","Tiwari");

// unset($test->first_name);
$test->showName();  //print_r is used for array or string type data value

?>