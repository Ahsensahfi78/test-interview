<?php
include_once("dbroot.php");
require "../model/studentcontroller.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $inputdata = [
        'firstname' => mysqli_real_escape_string($link,$_POST["firstname"]),
        'lastname' => mysqli_real_escape_string($link,$_POST["lastname"]),
        'email' => mysqli_real_escape_string($link,$_POST["email"]),
        'phonenumber' => mysqli_real_escape_string($link,$_POST["phonenumber"]),
        'address' => mysqli_real_escape_string($link,$_POST["address"])
    ];

    $studentcon = new studentcontroller;
    $result = $studentcon->create($inputdata);

    if($result){
        echo "succesfully inserted student details";
    }else{
        echo $link->error;
    }

    $link->close();
    
}


// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $fname = $_POST["firstname"];
//     $lname = $_POST["lastname"];
//     $email = $_POST["email"];
//     $phonenumber = $_POST["phonenumber"];
//     $address = $_POST["address"];
// }

// if (empty($_POST['firstname'])) {
//     $errors[] = "First Name Is Required";
// }

// if (empty($_POST['lastname'])) {
//     $errors[] = "Last Name Is Required";
// }

// if (empty($_POST['email'])) {
//     $errors[] = "Email Is Required";
// }

// if (empty($_POST['phonenumber'])) {
//     $errors[] = "Phonenumber Is Required";
// }

// if (empty($_POST['address'])) {
//     $errors[] = "Address Is Required";
// }

// if (!empty($errors)) {
//     foreach ($errors as $error) {
//         echo $error . "<br>";
//         header("location:../view/index.html",200);
//     }
// } else {

//     $query = "SELECT * FROM `userdetails` WHERE 
//         `email` = '{$email}' AND
//         `phonenumber` = '{$phonenumber}'
    
//     ";

//     $result = mysqli_query($con,$query);

//     if(mysqli_num_rows($result)){
        
//         echo "Data Inserted Already";
//     }else{
//         if (mysqli_query($con, "INSERT INTO `userdetails`(`fname`, `lname`, `email`, `phonenumber`, `address`) VALUES ('$fname','$lname','$email','$phonenumber','$address')")) {
//             echo "SUCESSFULLY INSERTED";
//             header("location:../view/dashboard.php",200);
    
//         }
//     }

//}




?>