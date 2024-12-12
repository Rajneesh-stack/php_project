<?php
$age =20;
switch($age){
    case $age>=18:
        echo "Eligible for vote";
        break;
    case $age<18:
        echo "Not eligible for vote";
        break;
        default:
        echo "No data match";
        break;
}
?>