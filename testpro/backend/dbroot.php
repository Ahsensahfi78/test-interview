<?php

require '../model/dbclass.php';

$con = new DB();

$link = $con->connect();

// if($con->connect_errno){
//     echo "database not connect" - $con->connect_error;
// }

$sql = "CREATE DATABASE IF NOT EXISTS userdata";

$sql2 = "CREATE TABLE if not exists userdetails(
  userid int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username varchar(20) Not Null,
  password varchar(20) Not Null );";


mysqli_select_db($link,'userdata');

if($link->query($sql2)=== true){
  
  if($link->query($sql2)=== true){
   // echo "table succesfully created";
  }else{
    echo "Error:". $link->error;
  }
}else{
    echo "Error: " . $link->error;

}


?>