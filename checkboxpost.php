<?php
$checkeroor='';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validation'])){
        if(empty($_POST['subject'])){
            echo "<script>
            alert('please select some one');
            window.location.href='checkboxvalidation.php'
            </script>";
        }
        else{
            print_r($_POST['subject']);
        }
    }
}
?>