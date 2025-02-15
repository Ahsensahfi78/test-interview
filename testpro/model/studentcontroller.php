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
}


?>