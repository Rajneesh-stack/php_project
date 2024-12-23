<form action="vaildatepost.php" method="post">
    Name: <input type="text" name="name"><br>
    <small style="color:red"><?= isset($_GET['nameerror'])?$_GET['nameerror']:''  ?></small><br>
    emil: <input type="email" name="email"><br><br>
    <small style="color:red"><?= isset($_GET['emailerror'])?$_GET['emailerror']:''  ?></small><br>
   mob no. <input type="number" name="no">
    <small style="color:red"><?= isset($_GET['mobileerror'])?$_GET['mobileerror']:''  ?></small><br>
     <input type="submit" name="validate" value="validation"><br><br>
</form>
<!-- ////this page is depend on validatepost.php -->