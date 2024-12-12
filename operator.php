<?php
// Arithmatic operator
$a=10;
$b=10;
$c=$a+$b;
echo($a*$b."<br>");
echo($c);
// ----------------
echo("<br>");
$b *=2;//$b=$b+10-----assignment operator
echo $b;
echo("<br>");
//-----------------
$name="a";
$name1="b    ";
echo $name." aur ".$name1." dost hai";//string operator
echo("<br>");
//---------------------------
$d = $a==10;//comparision operator
echo($d);
var_dump($d);
echo("<br>");
echo("<br>");
$arr=[1,1.2,"Rajneesh",true,null];
var_dump($arr);
//-------------------//logical operator
echo("<br>");
$value1=10;
$value2=20;
// $res=$value1||$value2;
$res=$value1>10&& $value2<20;
echo $res;
//--------------------unary operator/increment/decrement operator
$incre=10;
// echo $incre++;  ans=10
echo ++$incre;  //
//-----------------------ternary operator
echo("<br>");
$term1=10;
$term2=20;
$ress= $term1!=$term2?"Hello ": "bhsdk"; //ternary operator
echo $ress;


?>