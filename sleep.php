<?php

class student{
    public $course= "PHP";
    private $first_name;
    private $last_name;

    public function setName($fname, $lname){
        $this->first_name= $fname;
        $this->last_name= $lname;
    }
    public function __sleep(){
        return array('first_name', 'last_name');
    }
    public function __wakeup(){
        echo "This is wake-up method<br>";
}
}

$obj=new student();

$obj->setName("Deepanker","Tiwari");

$srl= serialize($obj);

$us= unserialize($srl);
echo $srl;
print_r($us);

?>