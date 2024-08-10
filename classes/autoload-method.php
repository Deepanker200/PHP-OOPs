<?php

// require "first.php";
// require "second.php";


 spl_autoload_register(function($class)
 {
    require "classes/". $class . ".php";
});

$test=new first();
echo"<br>";
$test1=new second();

?>