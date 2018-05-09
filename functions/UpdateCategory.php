<?php
include_once("../data_base/DataBaseConnection.php");


$name = htmlentities(addslashes($_GET['Name']));
$color = htmlentities(addslashes($_GET['Color']));
$id = htmlentities(addslashes($_GET['id']));

$db_connection = new DataBaseConnection();

$sql_string = "update category set id=?, color=?, name=? where id=?";
$result = $db_connection->get_connection()->prepare($sql_string);
$result->bind_param("issi", $id, $color, $name, $id);
$result->execute();

echo true;

?>