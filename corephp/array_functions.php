<?php

//combine
echo "Array Combine:";
echo '<br>';
$a= array("a","b","c");
$b= array("Banana","Mango","Cherry");
print_r(array_combine($a,$b));
echo '<br>';

//merge
echo "Array Merge:";
echo '<br>';
$c = array("a"=>"Bike","b"=>"cycle","c"=>"auto");
$d = array("c"=>"Car","d"=>"Truck","e"=>"Plane");
echo "<pre>";
print_r(array_merge($c,$d));
print_r(array_merge_recursive($c,$d));
echo '<br>';

//count
echo "Array Count:";
echo '<br>';
$e= array("PHP","ASP","PHp","AJAVA","ASP","PHP","PHP");
print_r(array_count_values($e));
echo '<br>';

//push
echo "Array Push:";
echo '<br>';
array_push($b,"Hello");
print_r($b);
echo '<br>';

//pop
echo "Array Pop:";
echo '<br>';
array_pop($b);
print_r($b);
echo '<br>';

//search-associative array
echo "Array Search:";
echo '<br>';
if(array_search("cycle",$c))
{
    echo "found";
}
else{
    echo "not found";
}
echo '<br>';
echo '<br>';
echo '<br>';

//in_array-numeric array
echo "IN_Array:";
echo '<br>';
if(in_array("PHP",$e))
{
    echo "Found";
}
else
{
    echo "not found";
}
?>