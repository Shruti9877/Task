<?php
//to force the parameter to work as object
class Myclass
{
    function Test(otherclass $otherclass)
    {
        echo "My Function";
    }
}
class otherclass extends Myclass
{
    function Demo()
    {
        echo  "This is a Demo Function";
    }
}
$ob = new Myclass;
$obj = new otherclass;
$ob->Test($obj);
echo "<br>";
$obj->Demo();
?>
