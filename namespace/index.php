<?php

require 'products.php';
require 'testing.php';

function wow(){
    echo "Wow from index.file<br>";
}

$obj=new  pro\product();
pro\wow();
?>