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
<form method="get" action="../functions/UpdateCategory.php">
<div class="form-group">
			   <label class="control-label" for="inputPatient">id</label>
			   <div class="field desc">
			  	 <input class="form-control" id="id" name="id" placeholder="id" type="text" value="" required>
			  </div>
     	 </div>
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

  <button type="submit" class="btn btn-success Add nover"  data-dismiss="modal" id="Add ">Add</button>
  </form>
 

</body>

</html>
