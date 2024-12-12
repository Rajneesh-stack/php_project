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

?>

<?php

?>

<?php

?>

<?php

?>

<?php

?>

<?php

?>

<?php

?>

<?php

?>