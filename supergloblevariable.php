<?php
//////======================$GLOBALS===============================================
    $x=10;//['x'=>10]
    function demo(){
        echo $GLOBALS['x'];
        $GLOBALS['y']=30;////using this keyword we can define variable globally
    } 
    demo();
    echo "<br>";
    echo $y;
    echo "<br>";
    ////------------------------------------------------------------------------------
?>

<?php
//////======================$_SERVER===============================================
echo "<pre>";
print_r($_SERVER);////it give all information of server 
echo $_SERVER['REQUEST_METHOD'];
print $_SERVER['PHP_SELF'];
echo "</pre>";
////------------------------------------------------------------------------------
?>


<?php

//////======================$_REQUEST===============================================
print_r($_REQUEST) ;//it contain submitted form data and cookie
echo "<br>";
echo "<br>";   echo "<br>";

?>
<form action="secondreque.php" method="post">
    <label for="Name">Name</label>
    <input type="text"id="Name" name="Name">
    <label for="Name">email</label>
    <input type="text"id="Name" name="email">
    <input type="submit">
</form>
