<?php

$balances = array (
                    array('1.1' ,'1.2','1.3'),
                    array('2.1' ,'2.2','2.3'),
                    array('3.1','3.2','3.3'),
                    array('4.1','4.2','4.3'),
                    array('5.1','5.2','5.3')
                  );

 echo "<table border=1>";
for ($col = 0; $col < 3; $col++)
 {
    echo "<tr>";
    for ($row = 0; $row < 5; $row++) 
    { 
        echo "<td>". $balances[$row][$col]."</td>"; 
    }
    echo "</tr>";
 }
echo "<table>";
?>