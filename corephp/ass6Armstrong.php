<?php

$a = 153;
$sum = 0;
$i = $a;
 while($i != 0)
 {
    $rem = $i % 10;
    $sum = $sum + ($rem * $rem * $rem);
    $i = $i/10 ;
 }

 if($a == $sum)
 {
    echo $a . " is an Armstrong Number";
 }
 else
 {
    echo $a." is not an Armstrong Number";
 }
?>