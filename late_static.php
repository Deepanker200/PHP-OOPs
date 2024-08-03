<?php

class base{
    protected static $name="Deepanker";

    public function show(){
        echo static::$name;
    }
}

class derived extends base{
    protected static $name="Tiwari";

}


$test=new derived();

$test->show();

// echo base::show();

?>