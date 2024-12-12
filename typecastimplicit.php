
<!-- typecast of implicit -->
<?php
$var=100;
$second="10";
$c=$var.$second;
echo $c;
echo gettype($c);


// <!-- typecast of explicit -->
echo "<br>";
echo "This is explicit";
echo "<br>";
$value='100';
$x=(int)$value;
print(gettype($value));
printf(gettype($x));



?>