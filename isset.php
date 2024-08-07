<?php

class student{
    public $course;
    private $first_name;
    private $last_name;
    private $detail=['name'=>'Test Name','age'=>20];

    public function setName($fname,$lname){
        $this->first_name=$fname;
        $this->last_name=$lname;
    }

    public function __isset($name){
        echo isset($this->detail[$name]);
    }

}


$test=new student();
$test->course="Physics";
// $test->setName('John','Doe');

// echo isset($test->course);

echo isset($test->name);

?>