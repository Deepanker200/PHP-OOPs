<?php 


trait hello{
    public function sayHello(){
        echo "Hello Everyone";
    }
}

trait bye{
    public function sayBye(){
        echo "Bye Bye Everyone";
    }
}

class base{
    use hello,bye;
}

class base2{
    use hello,bye;
}


$test=new base();
$test2=new base2();

$test->sayHello();
$test2->sayBye();

?>