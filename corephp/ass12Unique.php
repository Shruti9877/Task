<?php

echo "Array Unique:";
echo '<br>';
$e= array("PHP","ASP","PHp","AJAVA","ASP","PHP","PHP");
echo "<pre>";
//print_r(array_count_values($e));
print_r(array_unique($e));
print_r(array_rand($e));
echo '<br>';
?>