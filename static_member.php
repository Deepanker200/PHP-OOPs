<?php

class base{
    public static $name="Deepanker";



    // public function __construct($n){
    //      self::$name=$n;
    // }
}

class derived extends base{
    public static function show(){
        echo parent::$name;
    }
}


// echo base::$name;
// echo base::show();

$test= new derived();

$test->show();

?>