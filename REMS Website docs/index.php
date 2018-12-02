<?php

include_once 'includes/rdbc.php';

?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width innitial-scale=1">
<title>
</title>
	<link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/style.css">
	

	
</head>
<body>
	<div class="container">
	
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
			<div class="navbar-brand"><a href="home.php">REMS</a></div>				
			</div>
		
			<ul class="nav navbar-nav">
			<li><a href="index.php">Create Race</a></li>
			<li><a href="run.php">Register Race</a></li>
			<li><a href="report.php">View Reports</a></li>
			</ul>
		</nav>

		<div class="row col-md-6 col-md-offset-3">
		<div class="panel panel-primary">
		<div class="panel-heading">Create a Race</div>
	
	<form action="includes/s.php" method="POST">
	
	
	

	
	
	
	
	
	
	
	<label>Choose Manager Name : </label> <select name="cmn" placeholder="Enter Manager Name" class="form-control">
	<option name="omn" placeholder="Choose Manager Name"> </option>
	<?php
	include_once 'rdbc.php';
	$sql = "SELECT MAN_NAME FROM MANAGER;";
	$result = mysqli_query($connect,$sql);
	while($row=mysqli_fetch_assoc($result))
	{
			$mn = $row['MAN_NAME'];	
			echo "<option value=".$mn.">".$mn."</option>";
	}
	?> 
        
	</select><br>
	
	<label>Or Add Manager Name : </label>	<input type="text" class="form-control" placeholder="Enter Race Name" name="mn"><br>
	<label>Race Name : </label>	<input type="text" class="form-control" placeholder="Enter Race Name" name="rn"><br>
	<label>Locations	: </label>	<input type="text" class="form-control" placeholder="Enter Location" name="loc"><br>
	<label>Date		: </label>	<input type="date" class="form-control" name="dt"><br>
	<label>Fees		: </label>	<input type="float" class="form-control" placeholder="Enter Race Fees" name="fee"><br>

	<p align="center"><button type="submit" name="submit" class="btn btn-primary">Add Race</button></p>
	</form>
	</div></div>

	
	
	
	
	
	
	
	
	
	
	
	
	
</div>	
</body>
</html>







