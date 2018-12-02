<?php
	include_once 'rdbc.php';
	
$sql = "SELECT RACE_ID, RACE_NAME, RACE_LOC, RACE_DATE, RACE_FEES FROM RACE;";
	$result = mysqli_query($connect,$sql);
	echo "	<b><table align='center'>
			<tr><td width='180'>Race Name</td>
			<td width='200'>Location</td>
			<td width='180'>Date</td>
			<td width='100'>Fees</td>
			<td width='100' align='center'>Action</td>
			</tr></table></b>";
	while($row=mysqli_fetch_assoc($result))
	{
			$rid =$row['RACE_ID'];
			$rn = $row['RACE_NAME'];
			$rl = $row['RACE_LOC'];
			$rd = $row['RACE_DATE'];
			$rf = $row['RACE_FEES'];
			
			
		echo "<form action='try.php' method='post'>
		<table align='center'>
		<tr><td width='200' height='35'><label>{$rn}</label>
		<td width='180'>{$rl}
		<td width='180'>{$rd}
		<td width='100'>{$rf}
		
		<td width='100' align='center'><input type='checkbox' name='check_list[]' value='$rid'><br/>
		</tr></table>";
	}
	echo "<input type='submit' name='submit' value='Submit'></form>";

?>

