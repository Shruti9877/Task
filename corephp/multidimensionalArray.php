<?php
$var = array(3,45,array("Apple","Orange"),array("x"=>"PHP","JAVA"),"DEMO","HELLO");
echo "<pre>";
print_r($var);
echo '<br>';

print_r($var[2][0]);
echo '<br>';

print_r($var[3]['x']);
echo '<br>';

print_r($var[5]);
?>