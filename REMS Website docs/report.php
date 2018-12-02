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
		<div class="panel-heading">Report 1</div>
	
	<form>

	<?php

$sql = " SELECT RACE.RACE_NAME, RUNRACE.RACE_ID, count(*) as PARTICIPANTS FROM RUNRACE, RACE WHERE RACE.RACE_ID=RUNRACE.RACE_ID GROUP BY RACE_ID ORDER BY PARTICIPANTS DESC;";
$result=mysqli_query($connect,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck>0)
{
	echo
		"
			<table align='center'>
				<tr><td width='80'>Race ID</td><td width='150'>Race Name</td><td width='120'>No Participants</td></tr>
			</table>
		";
	
	while($row=mysqli_fetch_assoc($result))
	{
		
		$rn=$row['RACE_NAME'];
		$rid=$row['RACE_ID'];
		$rp=$row['PARTICIPANTS'];
		
		echo
		"
			<table align='center'>
				<tr><td width='80' align='center'>{$rid}</td><td width='150'>{$rn}</td><td width='120' align='center'>{$rp}</td></tr>
			</table>
		";
	}
}


?>

	</form>
	</div></div>
		
</div>	
</body>
</html>







