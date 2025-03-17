<?php

    class Transaction extends DB{
        public function __contruct(){
            $db = new DB;
            $this->link = $db->link;
        }

        public function transcreate($inputdata3){
            $trasel = $inputdata3['transactionse'];
            $description = $inputdata3['description'];
            $amount = $inputdata3['amount'];
            $studentname = $inputdata3['student_name'];
            $date = $inputdata3['date'];

            $transqry = $this->connect()->prepare("INSERT INTO `transaction`(`student_name`,`transaction_method`,`description`,`amount`,`date`) VALUES(?,?,?,?,?)");
            $transqry->bind_param("sssss",$studentname,$trasel,$description,$amount,$date);
            $transqry->execute();
            $transqry->store_result();

            if($transqry){
                return true;
            }

            else{
                return false;
            }
        }
    }
?>