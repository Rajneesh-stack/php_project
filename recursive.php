<?php
function number($num){
    
    if($num>5){
    return $num;   
}
return number($num+1);
}
 echo number(1);
 echo "<br>"; 

 /////===================print number using recursion=========================
 function numbe($num){
    echo "<br>"; 
    
    if($num<=10){
    echo $num; 
    return numbe($num+1);  
}
}
 echo numbe(1);
 //--------------------------------------------------------


  /////===================print factorial using recursion=========================
  function facto($num){ 
    if($num==0){
    return 1;
}
echo "<br>";
return $num*facto($num-1);
}
 echo facto(5);
?>