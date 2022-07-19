<?php

$a = array(1,2,3,4,5);
$b = 0;
$Total = 0;

for($i=0;$i<5;$i++)
{
    $Total = $Total + $a[$b];
    $b++;
}
echo "The result of sum of an integer: ".$Total;
?>