<?php
////==================anoneymos function==============================
 $add=function(){
    // echo 10+100;
    return 10+100;
 };  
 echo $add();

?>
<?php
////==================anoneymos function==============================
echo "<br>"; 
$facto=function($a){
    $fact=1;
   for($i=1;$i<=$a;$i++){
    $fact=$fact*$i;
   }
   return $fact;
 };  
 echo $facto(5);

?>