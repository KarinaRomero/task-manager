<?php

include_once("../data_base/DataBaseConnection.php");

$db_connection = new DataBaseConnection();

$sql_string = "select * from task";
$result = $db_connection->get_connection()->prepare($sql_string);
$result->execute();
$array_result = $result->get_result();

while ($task = $array_result->fetch_object()) {

   if ($task->status == 1) {
        echo '<table class = table>

    <thead class="active">

    <tr class="active">
      <th style="text-align: center">ID</th>
      <th style="text-align: center">Category</th>
      <th style="text-align: center">Description</th>
      <th style="text-align: center">Start for the day</th>
      <th style="text-align: center">End for the day</th>
      <th style="text-align: center">Leader</th>
      <th></th>
      </tr>
      
      </thead>';

        echo "<tr>";

        echo "<td>$task->id</td>";
        echo"<td>$task->category_id</td>";
        echo "<td>$task->description</td>";
        echo "<td>$task->startDate</td>";
        echo "<td>$task->endDate</td>";
        echo "<td>$task->endDoDate</td>";
        echo "<td>$task->user_id</td>";
        echo "<td><a href='../functions/GetCategory.php?id=$task->id'><button class='btn btn-warning'>Update</button></a></td>";

        echo "</tr>";
    }
    if ($task->status == 2) {
        echo '<table class = table>

    <thead class="active">

    <tr class="active">
      <th style="text-align: center">ID</th>
      <th style="text-align: center">Category</th>
      <th style="text-align: center">Description</th>
      <th style="text-align: center">Start for the day</th>
      <th style="text-align: center">End for the day</th>
      <th style="text-align: center">Leader</th>
      <th></th>
      </tr>
      
      </thead>';

        echo "<tr>";

        echo "<td>$task->id</td>";
        echo"<td>$task->category_id</td>";
        echo "<td>$task->description</td>";
        echo "<td>$task->startDate</td>";
        echo "<td>$task->endDate</td>";
        echo "<td>$task->endDoDate</td>";
        echo "<td><a href='../functions/GetCategory.php?id=$task->id'><button class='btn btn-warning'>Update</button></a></td>";

        echo "</tr>";
    }
    if ($task->status == 3) {
        echo '<table class = table>

    <thead class="active">

    <tr class="active">
      <th style="text-align: center">ID</th>
      <th style="text-align: center">Category</th>
      <th style="text-align: center">Description</th>
      <th style="text-align: center">Start for the day</th>
      <th style="text-align: center">End for the day</th>
      <th style="text-align: center">Finished date</th>
      <th style="text-align: center">Leader</th>
      <th></th>
      </tr>
      
      </thead>';

        echo "<tr>";

        echo "<td>$task->id</td>";
        echo"<td>$task->category_id</td>";
        echo "<td>$task->description</td>";
        echo "<td>$task->startDate</td>";
        echo "<td>$task->endDate</td>";
        echo "<td>$task->endDoDate</td>";
        echo "<td><a href='../functions/GetCategory.php?id=$task->id'><button class='btn btn-warning'>Update</button></a></td>";

        echo "</tr>";
    }
}

?>