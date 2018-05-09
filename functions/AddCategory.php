<?php
include_once("../data_base/DataBaseConnection.php");

$name = $_POST['Name'];
$color = $_POST['Color'];

$db_connection = new DataBaseConnection();

$sql_string = "insert into category (color, name) values (?, ?)";
$result = $db_connection->get_connection()->prepare($sql_string);
$result->bind_param("ss", $color, $name);
if (!$result->execute()) {
    echo "Falló la ejecución: (" . $result->errno . ") " . $result->error;
} else {
    return true;
}

?>