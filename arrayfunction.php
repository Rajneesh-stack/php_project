<?php
//======================array_push($arr,newelement)=============== 
 $arr=[1,2,3,4,5];
//  array_push($arr,6);
array_push($arr,[6,7,8]); //it is add  a element of array in last 
echo "<pre>";
 print_r($arr);
 echo "<pre>";
 //=========================array_pop(array)=========================
 array_pop($arr); //it is remove last element of array                                       
 print_r($arr);

?>

<?php
 //=========================array_unshift(array,element)=========================
echo "<br>";
$arr=[1,2,3,4,5];
array_unshift($arr,6);////it is add  a element of array in begining 
print_r($arr);
array_shift($arr);////it is remove a element of array in begining 
print_r($arr);
//==============================================================================

?>

<?php
//=========================array_merge(array1,array2)=========================
echo "<br>";
$arr1=[1,2,3,4,5];
$arr2=[11,22,33,44,55];
$res=array_merge($arr1,$arr2);//it add two array and return new array
print_r($res);
//==============================================================================

?>

<?php
//=========================compact(variabel as a string)=========================
$a=1;
$b=2;
$c="rajneesh";
$d=compact('a','b','c');//it convert the value of variable in associative array with key and value pair
print_r($d);

//==============================================================================

?>


<?php
//=========================sort(array)=========================================
$arr=[2,23,90,1,6];
sort($arr);////it sort array in ascending order
print_r($arr);
rsort($arr);////it sort array in decending order
print_r($arr);
//==============================================================================
?>

<?php
//=========================range(start,end)=========================================
print_r(range(0,9));////it create a associative array by given range
//==============================================================================
?>

<?php
//=========================array_combine(array(key),array(value))=========================================
$key=(range('a','f'));
$value=(range(0,5));
$newarr=array_combine($key,$value);///it create new associative array with two array in which first array is always will be key and second will be value
print_r($newarr);
//==============================================================================
?>

<?php
//=========================array_search(searching value,array)=========================================
$arr=['ram',1,2.2,true];
$res=array_search(2.2,$arr); ///it is use to search value and retrun the key of this value
print_r($res);///

//==============================================================================

?>

<?php

?>