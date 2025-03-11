<?php
include_once("dbroot.php");
require "../model/studentcontroller.php";

$att = "CREATE TABLE IF NOT EXISTS attandancetab(
    id int PRIMARY KEY AUTO_INCREMENT,
    firstname varchar(25),
    email varchar(25) NOT NULL,
    attand varchar(25)
)";

mysqli_select_db($link,'userdata');

if($link->query($att) === true){
    //echo "<h5>successfully attandance created<h5>";
}



if(!isset($_POST['checkbox1'],$_POST['checkbox2'],$_POST['firstname'],$_POST['email'])){
    //echo "fill the field";
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $inputdata2 = [
       // 'checkbox1' => mysqli_real_escape_string($link,$_POST["checkbox1"]),
        'checkbox2' => mysqli_real_escape_string($link,$_POST["checkbox2"]),
        'firstname' => mysqli_real_escape_string($link,$_POST["firstname"]),
        'email'     => mysqli_real_escape_string($link,$_POST["email"])
    ];

    $attands = new studentcontroller;
    $result  = $attands->createforatt($inputdata2);

    if($result){
        echo "successfully inserted attandance";
        header("location:../view/dashboard.php");
    }else{
        echo $link->error;
    }

    $link->close();
}

// if($con->query($att)=== true){
//     echo "attandance Table Created";
// }


// if(isset($_POST['attandance'])){
//     $checkbox1 = $_POST['checkbox1'];
//     $checkbox2 = $_POST['checkbox2'];
//     $fname = $_POST['firstname'];
//     $email = $_POST['email'];

//     if(empty($fname)){
//         $error[] = "First Name Is Required";
//     }

//     if(empty($email)){
//         $error[] = "Email Is Required";
//     }

//     if(empty($checkbox1)){
//         $error[] = "Check Box Is Required";
//     }

//     if(!empty($error)){
//         foreach($error as $err){
//             echo $err . "<br>";
//         }
//     }

//     $query = "INSERT INTO `attandancetab` (`id`,`firstname`,`email`,`attand`) VALUES('$fname','$email','$checkbox1','$checkbox2')";

//     $query_run = mysqli_query($con,$query);

//     if($query_run){
//         echo "Inserted Succesfully";
//         header("location:../view/dashboard.php"); 
//     }
// }

?>