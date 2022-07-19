<?php

class myClass
{
    function __construct()
        {
            echo $this->var= "My Constructor class";
        }
        function __destruct()
        {
            echo $this->var= " is Destroying";
        }
    
}
$obj = new myClass;
?>