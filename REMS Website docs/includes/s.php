<?php

include_once 'rdbc.php';




if(!empty($_POST['mn']) && isset($_POST['mn']))
{

$mn=$_POST['mn'];
$sql = "INSERT INTO MANAGER(MAN_NAME)
		VALUES ('$mn');";
mysqli_query($connect,$sql);

	$mnt = mysqli_real_escape_string($connect,$mn);
	$sql = "SELECT MAN_ID FROM MANAGER WHERE MAN_NAME = '$mnt';";
	$result = mysqli_query($connect,$sql);
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$mid = $row['MAN_ID'];
			$rn=$_POST['rn'];
			$loc=$_POST['loc'];
			$dt=$_POST['dt'];
			$fee=$_POST['fee'];

			$sql = "INSERT INTO RACE(RACE_NAME, RACE_LOC, RACE_DATE, RACE_FEES, MAN_ID)
			VALUES ('$rn','$loc','$dt','$fee','$mid');";
		
			mysqli_query($connect,$sql);
			

		}

	}
	else
	{
		echo "No results matching your search";
	}
    
}
else 
{
	$cmn = mysqli_real_escape_string($connect,$_POST['cmn']);
	$sql = "SELECT MAN_ID FROM MANAGER WHERE MAN_NAME = '$cmn';";
	$result = mysqli_query($connect,$sql);
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$mid = $row['MAN_ID'];
			$rn=$_POST['rn'];
			$loc=$_POST['loc'];
			$dt=$_POST['dt'];
			$fee=$_POST['fee'];

			$sql = "INSERT INTO RACE(RACE_NAME, RACE_LOC, RACE_DATE, RACE_FEES, MAN_ID)
			VALUES ('$rn','$loc','$dt','$fee','$mid');";
		
			mysqli_query($connect,$sql);
			

		}

	}
	else
	{
		echo "No results matching your search";
	}
}

header("Location: ../index.php?add=success");
?>