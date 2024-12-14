<?php
function hell(){//non return type function
    for($i=0;$i<=10;$i++){
        echo $i."<br>";
    }
}
hell();
echo "<br>";
echo "<br>";
function hello(){
    // echo " vansh ";
    for($i=0;$i<=10;$i++){//return type  with no argument function
        // echo $i."<br>";
       $a[]= $i."<br>";
    }
    return $a;
}
print_r(hello());
//=============================================================
?>
<?php
//=================Parameterized function=========================
////argument with no return type
echo "<br>";
echo "<br>";
function add($a,$b){//function with parameter
    echo $a+$b."<br>";
}
add(12,22);
//===========================================--------------------
echo "<br>";
echo "<br>";
function calculater($a,$b,$ope){//function with parameter
    if($ope=="+"){
        echo $a+$b;
    }elseif($ope=="-"){
        echo $a-$b;
    } elseif($ope=="*"){
        echo $a*$b;
    } elseif($ope=="/"){
        echo $a/$b;
    } elseif($ope=="%"){
        echo $a%$b;
    }
    else{
        echo "santosh pagal",$ope;
    }

}
calculater(22,4,"");




?>
<?php
//// table-----------------------------
echo "<br>";
function table($a){
    for($i=1;$i<=10;$i++){
    echo $a*$i ."<br>";
    }
}
table(2)
?>

<?php
//// string reverse-----------------------------
echo "<br>";
function rev($a){
    for($i=strlen($a)-1;$i>=0;$i--){
        echo $a[$i];
    }
}
rev("rajneesh")
?>
<!-- <?php
echo "<br>";
// function lstr($a){
//     for($i=0;$i>=strlen($a)-1;$i++){
//         $b=ord($i);
//         echo $b;
//     // if($b>=97){
//     //     echo("String is lower");
//     // }
//     // else{
//     //     echo("String is upperer");
//     // }
// }
// }
// lstr("rajneesh")
?> -->
<?php
echo "<br>";
function prime($a){
    $count=0;
for($i=1;$i<=$a;$i++){
    if($a%$i==0){
       $count= $count++;
    }
}
if($count==0){
    echo "prime number";
}
else{
    echo "not prime number";
}
}

 prime(12)
?>




