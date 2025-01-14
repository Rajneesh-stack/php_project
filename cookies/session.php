<?php
    session_start();
    $_SESSION['user']='HELLO';
    $_SESSION['pass']='12345';
    $_SESSION['hello']=['name=>ram','pass=>12345'];
    // session_destroy();
    print_r($_SESSION);
    
?>