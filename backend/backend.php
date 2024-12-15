<?php
session_start(); 


$fnameerr = $lnameerr = $emailerr = $phoneerr = $messageerr = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (empty($_POST["firstname"])) {
        $fnameerr = "First Name is required";
    } else {
        $fname = $_POST['firstname'];
    }


    if (empty($_POST["lastname"])) {
        $lnameerr = "Last Name is required";
    } else {
        $lname = $_POST['lastname'];
    }

    if (empty($_POST["email"])) {
        $emailerr = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailerr = "Invalid email format";
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST["telephone"])) {
        $phoneerr = "Telephone is required";
    } elseif (!preg_match("/^\d{10}$/", $_POST["telephone"])) {
        $phoneerr = "Invalid telephone number format";
    } else {
        $telephone = $_POST['telephone'];
    }

    if (empty($_POST["message"])) {
        $messageerr = "Message is required";
    } else {
        $message = $_POST['message'];
    }

    if ($fnameerr || $lnameerr || $emailerr || $phoneerr || $messageerr) {
        $_SESSION["fnameerr"] = $fnameerr;
        $_SESSION["lnameerr"] = $lnameerr;
        $_SESSION["emailerr"] = $emailerr;
        $_SESSION["phoneerr"] = $phoneerr;
        $_SESSION["messageerr"] = $messageerr;

        
        header("Location: ui.php"); 
        exit(); 
    }

    
}
?>
