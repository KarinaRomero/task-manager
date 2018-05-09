<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse bg-primary">
<center><h3><b>Task Manager</b></h3></center>
</nav>
  
<div class="container" style="padding-left: 0px; padding-right: 0px; padding-top: 15px;">
  <h1>Layout</h1>
</div>

<div class="container">
      <?php
      include '../functions/GetTasks.php';
      ?>
      <th style="{color: #324D5C}">ID</th>
</div>




</body>
</html>