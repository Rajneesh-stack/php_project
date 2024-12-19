<?php
////append mode a ka use file me write kerne ke liye kiya jata hai 
// $res= fopen("demo.txt","a");
//  fwrite($res,"It is demo file using append mode 'a'.");
//  fclose($res);

 //===================================================================
?>
<?php
///////============================r+=================================
//  $res= fopen("demo.txt","r+");
//  echo fread($res,filesize("demo.txt"));
//  fwrite($res,"this is read write mode.");
//  echo fread($res,filesize("demo.txt"));
//  fclose($res);
 //===================================================================
?>

<?php
////============================w+===================================
 $res=fopen("techsima.txt","w+");
 fwrite($res,"Ram ayodhya ke niwasi the wah 14 saal van me rhe");
 fseek($res,0);////it is use to hold execution where 0 is offset
 echo fread($res,filesize("techsima.txt"));
 fclose($res);  
?>

<?php
////=============================r+=======================================
////this is the proess of file uploding 
$res = fopen("radha.jpg","r");
$photo=fread($res,filesize("radha.jpg"));
$dest=fopen("krishna.jpg","w");
fwrite($dest,$photo);
fclose($dest);
fclose($res);
//-----------------------------------------------------------------------------
?>

<?php
////=============================================================================
$data=file_get_contents("krishna.jpg");
file_put_contents("god.jpg",$data);
////-----------------------------------------------------------------------------
?>