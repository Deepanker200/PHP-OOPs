<?php 

class abc{
    public function __construct(){
        echo "This is Construct Function";
    }

    public function hello(){
        echo "Hello";
    }

    public function __destruct(){
        echo "This is destruct function";
    }
}

$test=new abc();

$test->hello();
$test->hello();
$test->hello();

?>

