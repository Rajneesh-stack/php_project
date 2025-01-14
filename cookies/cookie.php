<?php
setcookie('user','ram',time()+3600);
print_r($_COOKIE['user']);
setcookie('use','seeta',time()+3600);
setcookie('user','');////to delete a cookie manually
setcookie('adarsh',$_SERVER['REMOTE_ADDR'],time()+3600);
//$_SERVER['REMOTE_ADDR']  ///to find the ip address of user/

?>