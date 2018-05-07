<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<div>
    <?php
    require("../data_base/CategoryConnectionDB.php");

    $category = new CategoryConnectionDB();
    $list_categories = $category->get_categories();

    $category_selected = null;

    echo "<form action='update.php' method'post'>";
    echo "<table>";
    foreach ($list_categories as $category) {
        echo "<tr>";

        echo "<td><input type='text' name ='id' value='$$category[0]'></td>";
        echo "<td><input type='text' name ='color' value='$$category[1]' ></td>";
        echo "<td><input type='text' name ='name' value='$$category[2]' ></td>";
        echo "<td><input type='text' name ='importance' value='$$category[3]' ></td>";
        echo "<td><input type='submit' name ='submit' value='update'></td>";

        echo "</tr>";
    }
    echo "</table>";
    echo "</form>";
    ?>
   
</div>

</body>
</html>