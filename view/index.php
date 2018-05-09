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

<div class="container">
<h2>Profile</h2>
<form>
     <?php
     	include '../functions/GetUser.php';
     ?>
<button class="btn btn-primary" data-toggle="modal" data-target="#EditProfile" id="add">Edit</button>

</form>
  </table>
</div>
</body>
<div id="EditProfile" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">×</button>
 <h4 class="modal-title">Actualizar</h4>
 </div>
 <div class="modal-body">
		 <div class="form-group">
			   <label class="control-label" for="inputPatient">Name</label>
			   <div class="field desc">
			  	 <input class="form-control" id="Name" name="Name" placeholder="Name" type="text" value="" required>
			  </div>
     	 </div>

          <div class="form-group">
	          <label class="control-label" for="inputPatient">Email</label>
	          <div class="field desc">
	       		  <input class="form-control" id="Email" name="Email" placeholder="Email" type="text" value="" required>
	         </div>
         </div>

          <div class="form-group">
	          <label class="control-label" for="inputPatient">Rol</label>
	          <div class="field desc">
	       		  <input class="form-control" id="Rol" name="Rol" placeholder="Rol" type="text" value="" required>
	         </div>
         </div>
		 <div class="control-group">

		 <div class="controls controls-row" id="when" style="margin-top:5px;">
		 </div>
		 </div>	 
 </div>
 <div class="modal-footer">
 <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
  <button type="submit" class="btn btn-success Actualizar nover"  data-dismiss="modal" id="Actualizar ">Update</button>
 </div>
 </div>

 </div>
</div>
</html>

