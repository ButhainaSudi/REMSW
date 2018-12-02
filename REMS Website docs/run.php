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

		<div class="row col-md-10 col-md-offset-1">
		<div class="panel panel-primary">
		<div class="panel-heading">Race Registration</div>
	
	

	
	
	
	
<?php
	
$sql = "SELECT RACE_ID, RACE_NAME, RACE_LOC, RACE_DATE, RACE_FEES FROM RACE;";
$result = mysqli_query($connect,$sql);
	echo "	<form action='includes/try.php' method='POST'>
			<br><tr><td><label>Choose Runner Name : </label> 
			<select name='crn' placeholder='Enter Runner Name' class='form-control'>
			<option name='orn' placeholder='Choose Runner Name'> </option>";
			$sql = "SELECT RUN_NAME FROM RUNNER;";
			$result2 = mysqli_query($connect,$sql);
			while($row=mysqli_fetch_assoc($result2))
			{
				$mn = $row['RUN_NAME'];	
				echo "<option value=".$mn.">".$mn."</option>";
			}
	echo" </select><br><br></td></tr>
	
			<tr><td><label>Or Add Your Name : </label>	<input type='text' class='form-control' placeholder='Enter Runner Name' name='rname'><br></td></tr>
			<div class='panel panel-heading'>Available Races</div>
			<b><table align='center'>
			<tr><td width='180'>Race Name</td>
			<td width='200'>Location</td>
			<td width='180'>Date</td>
			<td width='100'>Fees</td>
			<td width='100' align='center'>Registration</td>
			</tr></table></b>";
	while($row=mysqli_fetch_assoc($result))
	{
			$rid =$row['RACE_ID'];
			$rn = $row['RACE_NAME'];
			$rl = $row['RACE_LOC'];
			$rd = $row['RACE_DATE'];
			$rf = $row['RACE_FEES'];
			
			
		echo "
		<table align='center'>
		
		<tr><td width='200' height='35'><label>{$rn}</label>
		<td width='180'>{$rl}
		<td width='180'>{$rd}
		<td width='100'>{$rf}
		
		<td width='100' align='center'><input type='checkbox' name='check_list[]' value='$rid'><br/>
		</tr></table>";
	}
	echo "<br><p align='center'><input type='submit' name='submit' value='Submit'></p></form>";

?>

		
	
	</div></div>
</div>
</body>
</html>







