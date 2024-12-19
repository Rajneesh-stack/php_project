<?php
////=================================================================
readfile("text.txt"); //it use to readfile
////=================================================================
?>


<?php
////=================================================================
echo "<br>";
$data=fopen("text.txt","r");
// echo fread($data,100);// to read file
// echo fread($data,filesize("text.txt"));
echo "<br>";
 echo filesize("text.txt");
////filesize("file name")//// to use to get the size of file size 
echo "<br>";
// echo fgets($data);//to get first line of file
// echo fgetc($data);//to get first character of file

while(!feof($data)){
    echo fgetc($data);
}
fclose($data);//to close file


////====================================================================
?>

<?php
////file create or write==================================================

?>
