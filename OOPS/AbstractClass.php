<?php

abstract class myClass
{
    abstract function Demo();
    function Test()
    {
        echo "This is a Test Method";
    }

}

class newClass extends myClass
{
    function foo()
    {
        echo "this is a foo method";
    }
    function Demo()
    {
        $this->Test();
        echo "<br>";
        $this->foo();
        echo "<br>";
        echo "This is a Demo method";
    }
}

$obj = new newClass;
//$obj->Test;
$obj->Demo();


?>