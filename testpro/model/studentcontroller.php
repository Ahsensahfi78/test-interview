<?php

class studentcontroller extends DB{

    public function __construct(){
        $db = new DB;
        $this->link = $db->link;
    }

    public function create($inputdata){
        $fname = $inputdata['firstname'];
        $lname = $inputdata['lastname'];
        $email = $inputdata['email'];
        $phonenumber = $inputdata['phonenumber'];
        $address = $inputdata['address'];

        $stntinsquery = $this->connect()->prepare("INSERT INTO `userdetails`(`fname`,`lname`,`email`,`phonenumber`,`address`) values(?,?,?,?,?)");
        $stntinsquery->bind_param("sssss",$fname,$lname,$email,$phonenumber,$address);
        $stntinsquery->execute();
        $stntinsquery->store_result();

        if($stntinsquery){
            return true;
        }else{
            return false;
        }
    }

    public function createforatt($inputdata2){
        //$checkbox1 = $inputdata2['checkbox1'];
        $checkbox2 = $inputdata2['checkbox2'];
        $fname = $inputdata2['firstname'];
        $email = $inputdata2['email'];

        $attnquer = $this->connect()->prepare("INSERT INTO `attandancetab`(`firstname`,`email`,`attand`)values(?,?,?)");
        $attnquer->bind_param("sss",$fname,$email,$checkbox2);
        $attnquer->execute();
        $attnquer->store_result();

        if($attnquer){
            return true;
        }else{
            return false;
        }
    }
}


?>