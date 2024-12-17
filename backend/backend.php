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

        
        header("Location: /views/ui.php"); 
        exit(); 
    }

    $jsonFile = __DIR__ . "/../data/submit_data.json";
    $jsonNewData = [
        "first_name" => $fname,
        "last_name" => $lname,
        "email" => $email,
        "telephone" => $telephone,
        "message"=> $message
    ];
    if (file_exists($jsonFile)) {
        $jsonContent = file_get_contents($jsonFile);
        $dataArray = json_decode($jsonContent, true);
        $dataArray[] = $jsonNewData; 
    } else {
        $dataArray = [$jsonNewData];
    }

    $newJsonContent = json_encode($dataArray, JSON_PRETTY_PRINT);
    file_put_contents($jsonFile, $newJsonContent);
    header("Location: /views/ui.php"); 
}
?>
