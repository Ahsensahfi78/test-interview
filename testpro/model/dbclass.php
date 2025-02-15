<?php

class DB{
    var $host = "localhost";
    var $username = "root";

    var $password = "";

    var $dbname = "userdata";

    public $link;

    public function Database($host, $username , $password , $dbname){
        $this->host= $host;
        $this->username= $username;
        $this->password = $password;
        $this->dbname = $dbname;

    }

    public function connect(){
        $this->link = new mysqli($this->host,$this->username,$this->password,$this->dbname);

        if(mysqli_connect_error()){
            echo mysqli_connect_error();
            exit();

        }else{
            return $this->link;
        }
    }
}

?>