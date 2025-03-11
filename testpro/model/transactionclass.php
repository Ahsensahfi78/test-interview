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

            $transqry = $this->connect()->prepare("INSERT INTO `transaction`(`transaction_method`,`description`,`amount`) VALUES(?,?,?)");
            $transqry->bind_param("sss",$trasel,$description,$amount);
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