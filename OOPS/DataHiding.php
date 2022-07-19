<?php

class MyClass
{
    public $public = "Public Value";
    private $private = "Private Value";
    protected $protected = "Protected Value";

    public function Test()
    {
        echo $this->public;
        echo "<br>";
        echo $this->private;
        echo "<br>";
        echo $this->protected;
    }
}
$obj=new MyClass;
//echo $obj->public;
//echo $obj->private;
//echo $obj->protected;
$obj->Test();
?>