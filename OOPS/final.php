<?php
//to stop the overriding using final keyword we can define both class and method as final
class A
{
    final function Test()
    {
        echo "This is a Test Function";
    }
}
class B extends A
{
    function Demo()
    {
        echo "Test Method";
    }
}
$obj = new B;
$obj->Test();
echo "<br>";
$obj->Demo();

?>