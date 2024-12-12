<?php

//-------------for string length---------------
$str="  Hi this is Nothing   ";
echo trim($str);//remove space from ending and begining point
//this two type 1 is triml 7 trim
 echo strlen(trim($str));
 echo "<br>";
 echo strlen($str);
 //----------------------------------------------

 ////----------For array lenght------------------
 echo "<br>";
 $arr=[1,2,3,4,5,6,7];
 echo count($arr);


 ////------------str_repeat(string,time)-----------------
 echo "<br>";
 $repeat=str_repeat("hello ",10);
 echo($repeat);

  ////------------str_replace(replaced string,new string, whole string)-----------------
  echo "<br>";
  $oldstring="Hello World";
  $replace=str_replace("World","Rajneesh",$oldstring);
  echo($replace);
  ///--------------------------explode(seprator,string)---------------
  echo "<br>";
  $str="Ram bazar jata hai kal ,wh bazar nhi jayega";//it cnvert string to array
  $seprator=explode(", bn ",$str);     
  print_r($seprator);

  ///--------------------------explode(seprator,string)---------------
  echo "<br>";
  $arr=["Ram","Bazar","Jata","hai"];//it covert array to string
  $implode=implode(" ",$arr);
  echo $implode;

//--------------------split(string)----------------------------
echo "<br>";
$var ="Rajneeh";
print_r(str_split($var));
//-----------------str_word_count-----------------------------
echo "<br>";
$var ="Rajneesh prajapati dgdgdgd  khhgf";
$strword=str_word_count($var);
echo($strword);

//=================string reverse using loop===================
echo "<br>";
$var="Ram Sita";
// for($i=strlen($var)-1;$i>=4;$i--){
//    $rev=$var[$i];
// //    echo $rev;
// }

$explode=explode(" ",$var);
$first=strrev($explode[1]);
echo $explode[0]." ".$first;



//----------------lcfirst(string)/ucfirst(string)----------------------------
echo "<br>";
$str ="Hello Rajneesh";
Echo lcfirst($str); ///it  convert small letter of a string first letter
echo "<br>";
$str ="hello Rajneesh";
Echo ucfirst($str);///it  convert capital letter of a string first letter

//=======================Strtoupper&strtolower================================

echo "<br>";
$str ="Hello Rajneesh";
$lower=strtolower($str);//it convert all string to lowercase 
$upper=strtoupper($str);//it convert all string to uppercase
echo $lower;
echo "<br>";
echo $upper;

//----------------substr(string,index(starting point),lenght)-------------
echo "<br>";
$str ="Hello Rajneesh";
$substr=substr($str,6,14);//it is use to print the string by given position
echo $substr;
////------------strpos(string,"word")-----------------------------------

echo "<br>";
$str ="Hello Rajneesh";
$strpos=strpos($str,"l");// it is use to get position of a charcateror string
echo $strpos;
////----------------------strcmp()------------- 
echo "<br>";
$str ="Hello Rajneesh";
$str1 ="Hello Rajneesh";
$strcmp=strcmp($str,$str1);
echo $strcmp;


?>