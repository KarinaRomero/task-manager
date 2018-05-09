<?php

include("Config.php");

class DataBaseConnection{

    private $conection_db;

    function __construct(){
        $this->conection_db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if($this->conection_db->connect_errno){
            echo "Error: ", $this->conection_db->connect_error;
            return;
        }
        $this->conection_db->set_charset(DB_CHARSET);
    }
    public function get_connection(){
        return $this->conection_db;
    }
}


?>