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
   <div>
        <h1>Add categories: </h1>
        <form action= "../controller/CategoryController.php" method="post">
            <label>color: <input type="text" name="colorInput"></input></label>
            <label>name: <input type="text" name="nameInput"></input></label>
            <label>importance: <input type="text" name="importanceInput"></input></label>
            <input type="submit" name = "saveButton" value="Save"></input>
            
        </form>
     </div>
     
</div>

</body>
</html>