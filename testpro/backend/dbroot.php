<?php

$con = mysqli_connect("localhost","root","");

if($con->connect_errno){
    echo "database not connect" - $con->connect_error;
}

$sql = "CREATE DATABASE IF NOT EXISTS userdata";

$sql2 = "CREATE TABLE if not exists userdetails(
  userid int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  fname varchar(20) Not Null,
  lname varchar(10),
  email varchar(255),
  phonenumber varchar(10),
  address varchar(255));";


mysqli_select_db($con,'userdata');

if($con->query($sql2)=== true){
  
  if($con->query($sql2)=== true){
    echo "table succesfully created";
  }else{
    echo "Error:". $con->error;
  }
}else{
    echo "Error: " . $con->error;

}


?>