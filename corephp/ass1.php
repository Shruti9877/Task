<?php

$Physics = 50;
$Chemistry = 65;
$Biology = 75;
$Mathematics = 85; 
$Computer = 90;

$total = $Physics + $Chemistry + $Biology + $Mathematics + $Computer;
$percentage = ($total/500)*100;
echo "Total Marks Obtained from 500 : ".$total;
echo "<br>";
echo "Percentage is : ".$percentage;
echo "<br>";

if($percentage >= 85)
{
    echo "You are passed with A grade";
}
elseif($percentage >= 65)
{
    echo "You are passed with B grade";
}
elseif($percentage >= 45)
{
    echo "You are passed with C grade";
}
else
{
    echo "Sorry!You are Fail";
}

?>