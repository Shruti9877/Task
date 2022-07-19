<?php
//magic method
class A 
{
    function __call($method,$arg)
    {
        echo "Method is ".$method;
        echo "<br>";
        //var_dump($arg);
        echo "<br>";
        print_r($arg);
    }
}
$obj= new A;
$obj->TOPS("PHP","DM",12,45.23);


?>