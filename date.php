<?php
date_default_timezone_set("Asia/kolkata");
echo "Current year :".date(" Y")."<br>";//current year
echo "Current year :".date(" y")."<br>";//current month name
echo "Current month :".date(" m")."<br>";//Current month
echo "Current month name :".date(" M")."<br>";//Current month name
echo "Current date :".date(" d")."<br>";//Current date
echo "Current day name :".date(" D")."<br>";//Current day name
echo "Current hour :".date(" h")."<br>";//Current hour
echo "Current minute :".date(" i")."<br>";//Current minute
echo "Current second :".date(" s")."<br>";//Current second
echo "Current am/pm :".date(" a")."<br>";//Current second
echo date_default_timezone_get()."<br>";
// echo date_default_timezone_set("Asia/kolkata");
echo date("d-m-Y  h:i:s A")."<br>";
$a=mktime(4,30,55,11,25,23);///using this function create time date with our according
echo date("h:i:s A m-d-Y",$a)."<br>";
 $get=strtotime("10:20am 12 june 2004");
 echo date("h:i:s A m-d-Y",$get)."<br>";
 include "includemethod.php";
?>