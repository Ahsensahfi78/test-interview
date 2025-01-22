<?php

    class name{

        var $name;
        var $education;
        function setName($nam){
            $this->name = $nam;
        }

        function getName(){
            return $this->name;
        }

        function seteducation($edu){
            $this-$education = $edu;
        }

        function geteducation(){
            return $this->education;
        }
    }



    $sahfi = new name();
    $ahsen = new name();
   

    $sahfi->setName("This author name");
    $ahsen->setName("This author first name");

    $sahfi->geteducation("HND in Software");
    $ahsen->geteducation("HND,Bcom");

    $ahsen->geteducation();
    $sahfi->setName();
    $sahfi->geteducation();
    $ahsen->setName();



     

?>