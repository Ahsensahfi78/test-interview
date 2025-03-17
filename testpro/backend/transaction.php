<?php

require 'dbroot.php';
require '../model/transactionclass.php';

$transactiontable = "create table if not exists transaction (
    id int PRIMARY KEY not null AUTO_INCREMENT,
    student_name varchar(25) not null,
    transaction_method varchar(255) not null,
    description varchar(255),
    amount varchar(255),
    date Date
)";

mysqli_select_db($link,"userdata");

if($link->query($transactiontable) === true){
    echo "table succesfully created";
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $inputdata3 = [
        'transactionse' => mysqli_escape_string($link,$_POST['transactionse']),
        'description' => mysqli_escape_string($link,$_POST['description']),
        'amount' => mysqli_escape_string($link,$_POST['amount']),
        'student_name' => mysqli_escape_string($link,$_POST['student_name']),
        'date' => mysqli_escape_string($link ,$_POST['date'])
    ];

    $tra = new Transaction();
    $res = $tra->transcreate($inputdata3);

    if($res){
        echo "successfully inserted attandance";
        header("location:../view/dashboard.php");
        
    }else{
        echo $link->error;
    }

    $link->close();
}


?>