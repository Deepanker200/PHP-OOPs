<?php

echo "Line Number: " . __LINE__."<br>";
echo "The Full Path of this file is <b>" .__FILE__."</b><br>";
echo "The Directory of this file is <b>" .__DIR__ ."</b><br>";


class MyClass{



    public function MyFunction(){
        echo "The Function name is <b>".__FUNCTION__."<br></b>"; 
        echo "The Function name is <b>".__METHOD__."</b>"; 
    }

    public function __construct(){
        echo "The Function name is <b>".__CLASS__."</b><br>"; 
}

}
class newClass extends MyClass{

}

interface A{

}

class B implements A{

}


$obj=new MyClass();

$obj->MyFunction();

 if (is_subclass_of('B','A')){
    echo "The class exists <br>";
 }else{
    echo "The class does not exist <br>";
 }
?>