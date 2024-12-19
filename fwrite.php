<?php
$res=fopen("demo.txt","w");
$data="we are creating a file using fwrite function in file handling
and creating a file";
fwrite($res,$data);////create a file
 echo fputs($res,$data);////create a file 
fclose($res);
?>