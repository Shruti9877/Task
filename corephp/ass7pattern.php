<?php

$a = 1;
$b = $a;

for($i=0;$i<4;$i++)
{
    for($j=0;$j<4;$j++)
    {
        echo $a." ";
        $a = $a+4;
    }
    echo "<br>";
    $b++;
    $a = $b;
}

?>