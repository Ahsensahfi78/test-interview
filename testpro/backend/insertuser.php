<?php
include_once("dbroot.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $address = $_POST["address"];
}

if (empty($_POST['firstname'])) {
    $errors[] = "First Name Is Required";
}

if (empty($_POST['lastname'])) {
    $errors[] = "Last Name Is Required";
}

if (empty($_POST['email'])) {
    $errors[] = "Email Is Required";
}

if (empty($_POST['phonenumber'])) {
    $errors[] = "Phonenumber Is Required";
}

if (empty($_POST['address'])) {
    $errors[] = "Address Is Required";
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
} else {

    $query = "SELECT * FROM `userdetails` WHERE 
        `email` = '{$email}' AND
        `phonenumber` = '{$phonenumber}'
    
    ";

    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result)){
        
        echo "Data Inserted Already";
    }else{
        if (mysqli_query($con, "INSERT INTO `userdetails`(`fname`, `lname`, `email`, `phonenumber`, `address`) VALUES ('$fname','$lname','$email','$phonenumber','$address')")) {
            echo "SUCESSFULLY INSERTED";
    
        }
    }

}




?>