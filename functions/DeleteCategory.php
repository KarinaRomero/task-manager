<?php

include_once("../data_base/DataBaseConnection.php");

$id= $_GET["id"];

$db_connection = new DataBaseConnection();

$sql_string = "delete from category where id=?";
$result = $db_connection->get_connection()->prepare($sql_string);
$result->bind_param("i", $id);
if($result->execute()){
    header("location:../view/category.php");
}

?>
