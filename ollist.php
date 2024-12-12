<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol type="I">
        <?php
            $arr=['India','Japan','UAE','USA','Nepal','Pakistan','Aphganistan','China','Indonesiay','Astrerliya','Lanka','Russia','Sounth Korea','Bangladesh','Bhutan','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1','India1'];
                foreach($arr as $country){
        ?>
        <li><?=$country?></li>
        <?php
            }
        ?>
    </ol>
</body>
</html>