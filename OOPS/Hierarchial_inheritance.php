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
class C extends A 
{
    public function foo()
    {
        echo "This is a foo Function";
    }
}
$obj= new B;
$obj->Test();
echo "<br>";
$obj->Demo();
echo "<br>";

$ob= new C;
$ob->Demo();
echo "<br>";
$ob->foo();
?>