<?php

function Demo($classname)
{
    require $classname.'.php';
}
spl_autoload_register('Demo');
$obj = new MyClassA;
echo $obj->a;
echo "<br>";
$obj->Test();


?>