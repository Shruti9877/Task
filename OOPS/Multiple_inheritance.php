<?php

class A 
{
    public function Demo()
    {
        echo "This is a Demo Function";
    }
}
class B extends A 
{
    public function Test()
    {
        echo  "this is a Test Function";
    }
}
class C extends A,B;
{
    public function func()
    {
        echo "This is func Function";
    }
}
$obj=new C;
$obj->Demo();
echo "<br>";
$obj->Test();

?>
