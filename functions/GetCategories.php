<?php

include_once("../data_base/DataBaseConnection.php");

$db_connection = new DataBaseConnection();

$sql_string = "select * from category";
$result = $db_connection->get_connection()->prepare($sql_string);
$result->execute();
$array_result = $result->get_result();

while ($category = $array_result->fetch_object()) {
    echo "<tr>";
    echo "<td>$category->id</td>";
    echo "<td>$category->color</td>";
    echo "<td>$category->name</td>";
    echo "<td><a href='../functions/GetCategory.php?id=$category->id'><button class='btn btn-warning'>Update</button></a></td>";
	echo "<td><a href='../functions/DeleteCategory.php?id=$category->id'><button id='btnEliminar' class='btn btn-danger'>Delete</button></a></td>";
    echo "</tr>";
}
?>