<?php

require("ConnectionDB.php");

class RegistryModel extends ConectionDB
{
    private $login;

    function __construct()
    {
        parent::__construct();
    }
    /*
     *Return true if user adeed
     */
    public function add_registry($email, $password)
    {
        $succes = false;

        $consult_string = "insert into login (email, password) values (?, ?)";
        $result = $this->db_connection->prepare($consult_string);
        $result->bind_param("ss", $email, $password);
        if (!$result->execute()) {
            echo "Falló la ejecución: (" . $result->errno . ") " . $result->error;
       }else{
            $succes = true;
       }
        return $succes;
    }



}

?>