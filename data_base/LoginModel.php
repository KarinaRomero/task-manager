<?php

require("../data_base/ConnectionDB.php");

class LoginModel extends ConectionDB
{
    private $login;

    function __construct()
    {
        parent::__construct();
    }
    /*
     *Return 1 if user exist
     */
    public function init_login($email, $password)
    {
        $consult_string = "select * from login where email = ? ";
        $result = $this->db_connection->prepare($consult_string);
        $result->bind_param("s", $email);
        $result->execute();
        $array_result = $result->get_result();
        $list = $array_result->fetch_all();

        $count = 0;
        foreach ($list as $user) {
            if (password_verify($password, $user[2])) {
                $count++;
                

            }
        }

        return $count;
    }



}

?>