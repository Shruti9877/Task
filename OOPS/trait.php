<?php
//php doesnot support multiple inheritance so it provide a support through trait
//define class using trait and this class cannot create object so we have to extend it.
//It uses "use" keyword to call the trait class

trait A
{
    function Test()
    {
        echo "This is a Test Method";
    }
}
trait B
{
    function Demo()
    {
        echo "This is a Demo Method";
    }
}
class MyClass
{
    use A,B;
    function foo()
    {
        echo "This is a foo Function";
    }
}
$obj = new MyClass;
$obj->Test();
echo "<br>";
$obj->Demo();
echo "<br>";
$obj->foo();


?>