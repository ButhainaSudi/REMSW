<?php

include_once 'includes/rdbc.php';

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
			
			
		echo "	<form>

	
	<table align='center'>
	<tr><td width='200' height='35'><label>{$rn}</label> 	<input type='hidden' value='{$rn}' name='rn'>
	<td width='180'>{$rl} 	<input type='hidden' value='{$rl}' name='rl'>
	<td width='180'>{$rd} 	<input type='hidden' value='{$rd}' name='rd'>
	<td width='100'>{$rf} 	<input type='hidden' value='{$rf}' name='rf'>
	
	<td width='100' align='center'><input type='checkbox' name='check_list[]' value='{$rid}'>
	</tr></table>";
	}
echo "<br><p align='center' padding='20'><input type='submit' name='submit' value='Confirm Registration'></p>
	</form>";


?>



