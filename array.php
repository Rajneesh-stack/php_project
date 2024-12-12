<?php
$name= ["Ram","shaym","123"]; //1d array
$age=["adarsh"=>20,"vishal"=>24,"Rajiv"=>22];//associative array
// print_r($name[0]);
// print_r($age["vishal"]);
foreach($name as $val){
    echo $val." ";
}
echo "<br>";
foreach($age as $a=>$b){
    echo $a." ka age ".$b." year hai<br>" ;
}


?>