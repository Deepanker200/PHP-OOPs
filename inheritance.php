<?php

class employee{
    public $name;
    public $age;
    public $salary;


    function __construct($n, $a, $s){
        $this->name=$n; 
        $this->age=$a; 
        $this->salary=$s; 
    }


    function info(){
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name :" . $this->name."<br>";
        echo "Employee Age :" . $this->age."<br>";
        echo "Employee Salary :" . $this->salary."<br>";
    }

}

class manager extends employee{

    public $ta=1500;
    public $phone=200;
    public $totalSalary;

    function info(){
        $this->totalSalary=$this->salary + $this->ta + $this->phone;

        echo "<h3>Manager Profile</h3>";
        echo "Employee Name :" . $this->name."<br>";
        echo "Employee Age :" . $this->age."<br>";
        echo "Employee Salary :" . $this->salary."<br>";
    }

}

$e1=new manager("Christ",25,10000);
$e2=new employee("Rahul",27,2000);

$e1->info();
$e2->info();

?>