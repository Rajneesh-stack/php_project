<?php
// mysqli_connect(host,usrname,password,databasename)////it use to connect with database
echo "<pre>";
$con = (mysqli_connect('localhost','root','','app24'));
if($con){
    echo "connection succcesfull";
}
else{
    echo "something went wrong";
    echo mysqli_connect_error();//// it show connection error in database connection
}
// $sql= "create table user (id int(5) ,name varchar(25),email varchar(40))";
// echo mysqli_query($con,$sql);
// if (mysqli_query($con,$sql)){
//     echo "table created";
// }
// else{
//     echo mysqli_error($con);
// }
// $sql= "insert into user(id,name,email) values(1,'Rajneesh','rajneesh@gmail.com')";
// if(mysqli_query($con,$sql)){
//     echo 'data inserted';
// }
// else{
//     mysqli_error($con);
// }
$sql= "insert into user(id,name,email) values(2,'Rajeev','rajneesh@gmail.com');";
$sql.= "insert into user(id,name,email) values(3,'Rajan','rajneesh@gmail.com');";
$sql.= "insert into user(id,name,email) values(4,'Raj','rajneesh@gmail.com');";
mysqli_multi_query($con,$sql);

?>