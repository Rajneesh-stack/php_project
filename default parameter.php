<?php
////default parametr function=============================================
function defaultPara($age=18){
    if($age>18){
        return "Eligible for vote";
    }
    else{
        return "not elligible for vote";
    }
}
  echo defaultPara(15);
?>