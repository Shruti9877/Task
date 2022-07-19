<?php

class myClass
{
    static $a= "static variable";
    const r = "constant variable";

    static function Demo()
    {
        echo "This is a static function";
        echo "This is a Demo Function";
    }
}

class newClass extends myClass
{
    static $b = "B variable";
    static function Test()
    {
        echo parent::$a;
        echo "<br>";
        echo parent::r;
        echo "<br>";
        echo parent::Demo();
        echo "<br>";
        echo self::$b;
        echo "<br>";
        echo "This is a new Class";
    }
}

// echo myClass::$a;
// echo myclass::r;
// MyClass::Demo();

//newClass::Demo();
newClass::Test();

?>