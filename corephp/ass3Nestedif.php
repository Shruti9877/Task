<?php

for($a = 1901; $a <= 2016; $a++)
{
        if($a % 4 == 0)
        {
            if($a % 100 !=0)
            {
                echo $a." is a leap year"."<br>";
            }
            else
            {
                echo $a." is not a leap year"."<br>";
            }
            
        }
        else
        {
            echo $a." is not a leap year"."<br>";
        } 
}
   
?>