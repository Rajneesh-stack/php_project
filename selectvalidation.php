
<?php
$gendererror=$optionerror='';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validation'])){
        if(empty($_POST['country'])){
            $gendererror="please select someone";
        }
        if(empty($_POST['gender'])){
            $optionerror="please select gender";
        }       
 }
}
?>
<form action=""method="post">
    <select name="country" id="">
        <option value="">select</option>
        <option value="heloo">heloo</option>
        <option value="hii">hii</option>
        <option value="suno">suno</option>
        <option value="bolo">bolo</option>
        <option value="nikal">nikal</option>    
    </select><br><br>
    <small style="color:red;"><?=$gendererror?></small>
    <label for="nothing">gender :</label>
    
    male<input type="radio" id="nothing" name="gender" value="male">
    female<input type="radio" id="nothing"name="gender"value="female">
    vansh<input type="radio" id="nothing"name="gender"value="other"><br><br>
    <small style="color:red;"><?=$optionerror?></small>
    
    <input type="submit" name="validation" value="validate">
</form>
<?php
echo "<pre>";
print_r($_POST);
?>
