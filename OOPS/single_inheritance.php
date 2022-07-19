<?php

class A 
{
    public function Demo()
    {
        echo "This is a Demo function";
    }
}
class B extends A 
{
    public function Test()
    {
        echo "This is a Test Function";
    }
}
$obj= new B;
$obj->Demo();
echo "<br>";
$obj->Test();
?>