<?php
//strlen
echo "strlen:";
echo '<br>';
$a = "TOPS";
echo strlen($a);
echo '<br>';
echo '<br>';

//strpos
echo "strpos:";
echo '<br>';
echo strpos("Hello World!","World!");
echo '<br>';
echo '<br>';

//addcslashes
echo "addcslaches:";
echo '<br>';
echo addcslashes("Topstech","t");
echo '<br>';
echo '<br>';

//chunk_Split
echo "chunk_split:";
echo '<br>';
$b = "tops technologies";
echo chunk_split($b,3,'-');
echo '<br>';
echo '<br>';

//implode-array to string
echo "implode array in string:";
echo '<br>';
$c = array("Have","a","Nice","Day!");
echo implode("",$c);
echo '<br>';
echo '<br>';

//explode-string to array
echo "explode string to array:";
echo '<br>';
$d= "Good Morning";
 print_r(explode(" ",$d));
 echo '<br>';
 echo '<br>';

 //htmlentities
 echo "html entities:";
 echo '<br>';
 $e = '<p>Tops Tech</p>';
 echo htmlentities($e);
 echo '<br>';
 echo '<br>';

 //md5
 echo "md5:";
 echo '<br>';
 echo md5($d);
 echo '<br>';
 echo '<br>';

 //base64_encode
 echo "Base64_encode:";
 echo '<br>';
 echo base64_encode("TOPS");
 echo '<br>';
 echo '<br>';

 //base64_decode
 echo "Base64_decode:";
 echo '<br>';
 echo base64_decode("VG9wcw==");
 echo '<br>';
 echo '<br>';

 //stristr
 echo "stristr:";
 echo '<br>';
 $d= "this is 'the' demo for the string is can hold Alphanumeric value and symbols too like A-Z,a-z,0-9 and !@#$%^&*()";
 echo stristr($d,"demo",true);
 echo '<br>';
 echo stristr($d,"demo");

?>