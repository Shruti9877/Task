<?php

class A 
{
    protected function __construct()
    {
        echo "Constructor Method";
    }
}
class B extends A
{
    public $var = "Variable";
    function __construct()
    {
        parent::__construct();
        echo "<br>";
        echo $this->var;
        echo "<br>";
        echo "Constructor B";
    }
}
 $obj = new B;


?>