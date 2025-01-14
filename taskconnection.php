<?php
$conn=mysqli_connect('localhost','root','','task1');
if($conn){
    echo "connection successful <br>";
}
else{
    echo mysqli_connect_error($conn);
}
///===================creating table1==================
// $sql='create table user1 (id int(100), name varchar(100), address varchar(100))';
// if(mysqli_query($conn,$sql)){
//     echo "table creation successful";
// }                           
// else{
//     echo mysqli_error($conn);
// }

///===================creating table2==================
// $sql='create table user2 (id int(100)PRIMARY KEY, name varchar(100), address varchar(100))';
// if(mysqli_query($conn,$sql)){
//     echo "table creation successful";
// }
// else{
//     echo mysqli_error($conn);
// }

///===================creating table3==================
// $sql='create table user3 (id int(100)PRIMARY KEY, name varchar(100), address varchar(100))';
// if(mysqli_query($conn,$sql)){
//     echo "table creation successful";
// }
// else{
//     echo mysqli_error($conn);
// }

///===================creating table4==================
// $sql='create table user4 (id int(100)PRIMARY KEY, name varchar(100), address varchar(100))';
// if(mysqli_query($conn,$sql)){
//     echo "table creation successful";
// }
// else{
//     echo mysqli_error($conn);
// }

///===================creating table5==================
// $sql='create table user5 (id int(100)PRIMARY KEY, name varchar(100), address varchar(100))';
// if(mysqli_query($conn,$sql)){
//     echo "table creation successful";
// }
// else{
//     echo mysqli_error($conn);
// }

///===================insert data in table 1==================

// $sql='insert into user1(id,name,address)values(1,"Rajneesh","Ambedkar Nagar"),
// (2,"Ranjeet","Ayodhya"),
// (3,"Rajeev","Akabarpur"),
// (4,"Rajan","Devariya"),
// (5,"Raj","unknown")';
// $sql='insert into user1(id,name,address)values(1,"Rajneesh","Ambedkar Nagar");';
// $sql.='insert into user1(id,name,address)values(1,"Rajneesh","Ambedkar Nagar");';
// $sql.='insert into user1(id,name,address)values(1,"Rajneesh","Ambedkar Nagar");';
// $sql.='insert into user1(id,name,address)values(1,"Rajneesh","Ambedkar Nagar");';
// // if(mysqli_query($conn,$sql))
// if(mysqli_multi_query($conn,$sql)){
//     echo "data inserted succesful";
// }
// else{
//     mysqli_error($conn,$sql);
// }

////==================insert data table 2=========================================

// $sql='insert into user2( id,name,address)values(1,"Rajneesh","Ambedkar Nagar"),
// //  (2,"Ranjeet","Ayodhya"),
// // (3,"Rajeev","Akabarpur"),
// //  (4,"Rajan","Devariya"),
// //  (5,"Raj","unknown")';

// $sql='insert into user2(id,name,address)values(6,"Rajneesh","Ambedkar Nagar");';
//  $sql.='insert into user2(id,name,address)values(7,"Rajneesh","Ambedkar Nagar");';
//  $sql.='insert into user2(id,name,address)values(8,"Rajneesh","Ambedkar Nagar");';
//  $sql.='insert into user2(id,name,address)values(9,"Rajneesh","Ambedkar Nagar");';
// //  if(mysqli_query($conn,$sql)){
//     if(mysqli_multi_query($conn,$sql)){
//          echo "data inserted succesful";
//      }
//      else{
//          mysqli_error($conn,$sql);
//      }

////==================insert data table 3=========================================

// $sql='insert into user3( id,name,address)values(1,"Rajneesh","Ambedkar Nagar"),
//  (2,"Ranjeet","Ayodhya"),
// (3,"Rajeev","Akabarpur"),
//  (4,"Rajan","Devariya"),
//  (5,"Raj","unknown")';

// $sql='insert into user3(id,name,address)values(6,"Rajneesh","Ambedkar Nagar");';
//  $sql.='insert into user3(id,name,address)values(7,"Rajneesh","Ambedkar Nagar");';
//  $sql.='insert into user3(id,name,address)values(8,"Rajneesh","Ambedkar Nagar");';
//  $sql.='insert into user3(id,name,address)values(9,"Rajneesh","Ambedkar Nagar");';
// //  if(mysqli_query($conn,$sql)){
//      if(mysqli_multi_query($conn,$sql)){
//           echo "data inserted succesful";
//       }
//       else{
//           mysqli_error($conn,$sql);
//      }

////==================insert data table 4=========================================

// $sql='insert into user4( id,name,address)values(1,"Rajneesh","Ambedkar Nagar"),
//  (2,"Ranjeet","Ayodhya"),
// (3,"Rajeev","Akabarpur"),
//  (4,"Rajan","Devariya"),
//  (5,"Raj","unknown")';

// $sql='insert into user4(id,name,address)values(6,"Rajneesh","Ambedkar Nagar");';
//  $sql.='insert into user4(id,name,address)values(7,"Rajneesh","Ambedkar Nagar");';
//  $sql.='insert into user4(id,name,address)values(8,"Rajneesh","Ambedkar Nagar");';
//  $sql.='insert into user4(id,name,address)values(9,"Rajneesh","Ambedkar Nagar");';
// //  if(mysqli_query($conn,$sql)){
//     if(mysqli_multi_query($conn,$sql)){
//           echo "data inserted succesful";
//       }
//       else{
//           mysqli_error($conn,$sql);
//      }

////==================insert data table 5=========================================

// $sql='insert into user5( id,name,address)values(1,"Rajneesh","Ambedkar Nagar"),
//  (2,"Ranjeet","Ayodhya"),
// (3,"Rajeev","Akabarpur"),
//  (4,"Rajan","Devariya"),
//  (5,"Raj","unknown")';

// $sql='insert into user5(id,name,address)values(6,"Rajneesh","Ambedkar Nagar");';
//  $sql.='insert into user5(id,name,address)values(7,"Rajneesh","Ambedkar Nagar");';
//  $sql.='insert into user5(id,name,address)values(8,"Rajneesh","Ambedkar Nagar");';
//  $sql.='insert into user5(id,name,address)values(9,"Rajneesh","Ambedkar Nagar");';
// //  if(mysqli_query($conn,$sql)){
//      if(mysqli_multi_query($conn,$sql)){
//           echo "data inserted succesful";
//       }
//       else{
//           mysqli_error($conn,$sql);
//      }

/////============================delete data from tabel==================
// $sql='delete from user5 where id=6;';
// // echo mysqli_query($conn,$sql);
// if(mysqli_query($conn,$sql)){
//     echo 'deleted successful';
// }
// else {
//     mysqli_error($conn,$sql);
// }
// echo mysqli_affected_rows($conn); ////it return how many rows affected in a table
/////////============================deleted data  successful==================
   

/////============================select all data from tabel=================
// $sql='select * from user5';
// $result = mysqli_query($conn,$sql);
// echo mysqli_num_rows($result); ////it return how many row are return 
// echo '<pre>';
// // print_r(mysqli_fetch_all($result,MYSQLI_ASSOC));///it is use to fetch all data
// // print_r(mysqli_fetch_assoc($result));///it is use to fetch single data
// while($record=mysqli_fetch_assoc($result))///it is use to fetch all data
// {
//     print_r($record);
// }

///////=======================================================================

/////============================update data from tabel=================
$sql='update  user5 set name ="pagal" where id=5';
mysqli_query($conn,$sql);
echo  " one row affected" .mysqli_affected_rows($conn);
/////====================================================================
?>                                       