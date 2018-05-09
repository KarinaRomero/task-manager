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
<link rel="stylesheet" type="text/css" href="../styles/styles.css">
<body>
  
<nav class="navbar navbar-inverse bg-primary">
<center><h3><b>Task Manager</b></h3></center>
</nav>

<?php

if(isset($_GET["id"])){
  $id= $_GET["id"];
  $color= $_GET["color"];
  $name= $_GET["name"];

  echo "<input type='hidden' id='Hid' value='$id'>";
  echo "<input type='hidden' id='Hcolor' value='$color'>";
  echo "<input type='hidden' id='Hname' value='$name'>";
?>
<div class="container">
<h2>Categories</h2>
<button class="btn btn-primary" data-toggle="modal" data-target="#AddCategoryModal" id="AddCategoryM">Add</button> 

 <table class="table">
    <thead class="active">
      <tr class="active">
      <th style="text-align: center">ID</th>
      <th style="text-align: center">Color</th>
      <th style="text-align: center">Name</th>
      <th style="text-align: center">Update</th>
      <th style="text-align: center">Delete</th>
      </tr>
    </thead>
    <tbody class="ContentTableCategory">
      <?php
        include '../functions/GetCategories.php';
      ?>
    </tbody>
  </table>
</div>
<?php
}else{
?>

<div class="container">
<h2>Categories</h2>
<button class="btn btn-primary" data-toggle="modal" data-target="#AddCategoryModal" id="AddCategoryM">Add</button> 

 <table class="table">
    <thead class="active">
      <tr class="active">
      <th style="text-align: center">ID</th>
      <th style="text-align: center">Color</th>
      <th style="text-align: center">Name</th>
      <th style="text-align: center">Update</th>
      <th style="text-align: center">Delete</th>
      </tr>
    </thead>
    <tbody class="ContentTableCategory">
      <?php
        include '../functions/GetCategories.php';
      ?>
    </tbody>
  </table>
</div>

<?php
}
?>

</body>

<div id="AddCategoryModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">×</button>
 <h4 class="modal-title">Add</h4>
 </div>
 <div class="modal-body">
		 <div class="form-group">
			   <label class="control-label" for="inputPatient">Name</label>
			   <div class="field desc">
			  	 <input class="form-control" id="Name" name="Name" placeholder="Name" type="text" value="" required>
			  </div>
     	 </div>

          <div class="form-group">
	          <label class="control-label" for="inputPatient">Color</label>
	          <div class="field desc">
	       		  <input class="form-control" id="Color" name="Color" placeholder="Color" type="text" value="" required>
	         </div>
         </div>
		 <div class="control-group">

		 <div class="controls controls-row" id="when" style="margin-top:5px;">
		 </div>
		 </div>	 
 </div>
 <div class="modal-footer">
  <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
  <button type="submit" class="btn btn-success Update hide"  data-dismiss="modal" id="Update" >Update</button>
  <button type="submit" class="btn btn-success Add nover"  data-dismiss="modal" id="Add">Add</button>
 </div>
 </div>
 </div>
</div>

<script type="text/javascript" src="../scripts/view_manager.js"></script>

</html>

