<?php

class A 
{
    public function Demo()
    {
        echo "This is a Demo Function";
    }
}
class B extends A 
{
    public function Test()
    {
        echo "This is a Test Function";
    }
}
class C extends B 
{
    public function foo()
    {
        echo "This is foo Function";
    }
}
$obj= new C;
$obj->Demo();
echo "<br>";
$obj->Test();
echo "<br>";
$obj->foo();
?>