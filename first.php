<?php

class calculation{
    public $a,$b,$c;

    function sum(){
        $this->c=$this->a + $this->b;

        return $this->c;
    }

    function sub(){
        $this->c=$this->a - $this->b;

        return $this->c;
    }
}

$c1= new calculation();
$c1->a = 20;
$c1->b = 10;

$c2= new calculation();
$c2->a = 50;
$c2->b = 35;



echo "Sum of 1st: " .$c1->sum(). "<br>";
echo "Sum of 2nd: " .$c2->sum();

?>