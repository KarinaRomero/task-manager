<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:../../controller/LoginController.php");

}
require("../controller/LoginControler.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
<style>
</style>
</head>
<body>
<a href="TeamController.php">Add team</a><br>
<a href="../view/ShowCategories.php">Show Category</a>
<a href="../view/CreateCategories.php">Add Category</a>
<a href="../view/updateCategories.php">update Category</a>
<?php
echo "<h1>Bienvenido, desde la clase principal</h1>";
echo "Hola: ", $_SESSION["user"];
?>
<div>
    <h1>Profile: </h1>
        <form action= "../controller/ProfileController.php" method="post">
            <label>color: <input type="text" name="colorInput"></input></label>
            <label>name: <input type="text" name="nameInput"></input></label>
            <label>importance: <input type="text" name="importanceInput"></input></label>
            <input type="submit" name = "saveButton" value="Save"></input>
            
        </form>
     </div>
</body>
</html>