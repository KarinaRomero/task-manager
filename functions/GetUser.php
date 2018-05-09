<?php

include_once("../data_base/DataBaseConnection.php");

$id_login = 1;

$db_connection = new DataBaseConnection();

$sql_string = "select * from user where id = ? ";
$result = $db_connection->get_connection()->prepare($sql_string);
$result->bind_param("i", $id_login);
$result->execute();
$array_result = $result->get_result();

while($user = $array_result->fetch_object()){
        echo "<div class='form-group'><label for='pwd'>id:</label><input type='text' class='form-control' name ='id' value='$user->id' disabled></div>";
        echo "<div class='form-group'><label for='pwd'>name:</label><input type='text' class='form-control' name ='name' value='$user->name' disabled></div>";
        echo "<div class='form-group'><label for='pwd'>telephone:</label><input type='text' class='form-control' name ='email' value='$user->email' disabled></div>";
        echo "<div class='form-group'><label for='pwd'>description:</label><input type='text' class='form-control' name ='rol' value='$user->rol' disabled></div>";
}

?>