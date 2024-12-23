<?php
// print_r($_GET);//// it show the data in url
print_r($_POST)."<br>";///it does not show the data in url
echo "My name is ".$_POST['Name']."<br>";
echo "My name is ".$_POST['Email']."<br>";
$a=$_POST['mob'];
echo "My name is ".$_POST['kuch']."<br>";

for($i=1;$i<=10;$i++){
    echo "<br>";
    echo $i*$a;
}

?>
<form action=""method="post">
    <pre>
    <label for="Name">Name</label>
    <input type="text"id="Name" name="Name"><br>
    <label for="em">email</label> 
    <input type="text"id="em" name="Email"><br>
    <label for="m">mob</label> 
    <input type="number"id="m" name="mob"><br>
    <label for="Na">kuch kho</label> 
    <input type="text"id="Na" name="kuch"><br>
    </pre>
    <button type="submit">Submit</button>
</form>