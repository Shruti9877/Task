<?php

//types of header file

//1. Location
// header('location:https://www.google.com');


//2. Refresh
// header('Refresh:5;url="https://www.google.com"');
// echo "you will be redirect within 5 seconds";


//3. Content-Type
header('Content-Type:application/octet-stream');
header('Content-Dispositon:attachment;filename="demo.txt"');

// 4.Content-Disposition
//header('Content-Type:application/pdf');
// header('Content-Dispositon:attachment;filename="demo.pdf"');
?> 