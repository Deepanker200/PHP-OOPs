<?php 

class student{
    private $first_name;
    private $last_name;

    private function setName($fname, $lname){
        $this->first_name= $fname;
        $this->last_name= $lname;
    }

    public function __call($method, $args){
        if(method_exists($this, $method))
        {
             call_user_func_array([$this, $method], $args);
        }else{
            echo "Method does not exist: $method";
        }
    }
}

$test=new student();

$test->setName("Deepanker","Tiwari");

echo"<pre>";
print_r($test);   //print_r is used for array for its value!
echo"<pre>";

?>