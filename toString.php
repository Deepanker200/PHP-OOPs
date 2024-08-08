<?php

class abc{
    public function __toString(){
        return "Can't print object as a string of a class: ". get_class($this);
    }
}


$test=new abc();
echo $test;

?>