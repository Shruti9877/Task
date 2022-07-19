<?php
//magic method
class A 
{
    function __set($var,$val)
    {
        echo "Variable is ".$var;
        echo "<br>";
        echo "Value is ".$val;
    }
    function __get($var)
    {
        echo "Variable is ".$var;
    }
}
$obj = new A;
$obj->x="Test";
echo "<br>";
$obj->demo;
?>