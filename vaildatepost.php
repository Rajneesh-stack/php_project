<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validate'])){
        if(empty($_POST['name'])){
            header('Location:validation1.php?nameerror=Name feild is requrire');
        }
        elseif(empty($_POST['email'])){
            header('Location:validation1.php?emailerror=email feild is requrire');  
        }
        elseif(empty($_POST['no'])){
            header('Location:validation1.php?mobileerror= is requrire');  
        }
        else{
            echo "my name is ".$_POST['name']."<br>and email is ".$_POST['email']."<br>mob is ".$_POST['no'] ;
        }

    }
    else{
        echo "invalid ";
    }
}


?>