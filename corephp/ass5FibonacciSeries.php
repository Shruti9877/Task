<?php
// 0 1 1 2 3 5 8 13 21 34
// a b
$a = 0;
$b = 1;

echo $a . "<br>". $b;
 echo "<br>";
 for ($f=0; $f<=34 ; $f++)
 {
    $f = $a + $b;
    echo $f;
    $a = $b;
    $b = $f; 
    echo "<br>";
 }

?>