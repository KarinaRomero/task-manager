<?php

include_once("../data_base/DataBaseConnection.php");

$id= $_GET["id"];

$db_connection = new DataBaseConnection();

$sql_string = "select * from category where id = ? ";
$result = $db_connection->get_connection()->prepare($sql_string);
$result->bind_param("i", $id);
$result->execute();
$array_result = $result->get_result();

while ($category = $array_result->fetch_object()) {

    $id = $category->id;
    $color = $category->color;
    $name = $category->name;

    header("location:../view/Category.php?id=".$id."&color=".$color."&name=".$name."");    
}





?>