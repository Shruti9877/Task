<?php

interface A 
{
    function Demo();
    function Test();
}
interface B
{
    function foo();
}
class C implements A,B 
{
    function Demo()
    {
        echo "This is a Demo Method";
    }
    function Test()
    {
        echo "This is a Test Method";
    }
    function foo()
    {
        echo "This is a foo Method";
    }
}
$obj = new C;
$obj->Demo();
echo "<br>";
$obj->Test();
echo "<br>";
echo $obj->foo();

?>

download free html templates for online shopping