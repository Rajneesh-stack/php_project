<?php
$var=100;
if($var!==100):
    echo "Equal";
echo "C";
endif;

if($var!='100' && $var===100):
    echo "This is equal";

elseif(!$var):
    echo " equal";

elseif($var>10|| $var<10):
    echo " hello";

else:
    echo " aa gye";
endif;

?>