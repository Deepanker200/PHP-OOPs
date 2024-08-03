<?php

interface parent1{

     function calc($a, $b);    //By default access mode is public 
}

interface parent2{
    function sub($c, $d);
}



class child implements parent1,parent2{
    public function calc($a, $b){
        echo $a+$b;
    }
    public function sub($c, $d){
        echo $c-$d;
}
}

$test=new child();
$test->calc(19,11);
echo "<br>";
$test->sub(19,11);

?>