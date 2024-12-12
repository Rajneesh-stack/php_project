<?php
    // $arr=[
    //     [
    //         [1,2,3],[12,13,14,15]
    //     ]
    // ];
    // // print_r($arr[0][0][2]);
    // print_r($arr[0][1][2]);

    //////-----------------------Associative array------------
    $arrr=["name"=>["age"=>1,2,'x'=>3]];
    // print_r($arrr['name'][0]);

    foreach($arrr as $val):
        foreach($val as $v):
            echo $v;
        endforeach;
    endforeach;



?>