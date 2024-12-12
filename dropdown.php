<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>ggggggggggggggg</p>

    <select name="" id="">
        <option value="">Select Country</option>
        <?php
            $country= ['India','Rajneesh','china','nepal','bhutan'];
            foreach($country as $value){
            
            // for($i=0;$i<=4;$i++){
            //     echo "<option value=''>$country[$i]</option>";
            // }

          ///  ------------------------------------------------------------------
            // foreach($country as $value){
            //     echo "<option value=''>$value</option>";
            // }
            ////-----------------------------------------------
        ?>
        <!-- <option value="">India</option> -->
        <!-- <option value="">Pakistan</option>
        <option value="">Russian</option>
        <option value="">Russia1</option> 
        <option value="">Russia2</option> 
        <option value="">Russia3</option> -->
     
        <!-- <option value=''><?php  //echo $value?></option> -->

        <!-- <option value=""><?= $value?></option> -->
        <?php
          }
        ?>
  







        




    </select>
</body>
</html>