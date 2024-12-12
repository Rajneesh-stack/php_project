<?php
// $fact=1;
// for($i=1;$i<=5;$i++):
// //    if($i==1){
// //     echo $i;
// //    }
// //    else{
// //     echo "-".$i;
// //    }
// $fact=$fact*$i;
// endfor;
// echo $fact;

$num=1;
for($i=0;$i<=9;$i++){
   
   

 for($j=0;$j<=9;$j++){
        if( $i==9 && $j==9){
            echo  $i.$j;    
      }
      echo $i.$j.",";

 }
}

?>