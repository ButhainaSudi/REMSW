<?php
	include_once 'rdbc.php';
if(isset($_POST['submit']))
{	
	if(!empty($_POST['rname']) && isset($_POST['rname']))
	{
	//to run PHP script on submit
	if(!empty($_POST['check_list']))
	{
		//add runner
		$rname=$_POST['rname'];
		$sql = "INSERT INTO RUNNER(RUN_NAME)
		VALUES ('$rname');";
		mysqli_query($connect,$sql);
		
		//search to retrieve runner id
		$rmnt = mysqli_real_escape_string($connect,$rname);
		$sql = "SELECT RUN_ID FROM RUNNER WHERE RUN_NAME = '$rmnt';";
		$result = mysqli_query($connect,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck>0)
		{	//insert data into runrace table
			while($row=mysqli_fetch_assoc($result))
			{
				
				foreach($_POST['check_list'] as $selected)
				{
					$rid = $row['RUN_ID'];
					$raid = $selected;
					$sql = "INSERT INTO RUNRACE(RUN_ID, RACE_ID)
					VALUES ('$rid','$raid');";
					
					mysqli_query($connect,$sql);
				}
				
			}

		}
		
		// Loop to store and display values of individual checked checkbox.

	}
	else
	{
		echo "You have not selected any race. You are not Registered!<br>";
	}
	}
	else{
		//search to retrieve runner id
		$rmnt = mysqli_real_escape_string($connect,$_POST['crn']);
		$sql = "SELECT RUN_ID FROM RUNNER WHERE RUN_NAME = '$rmnt';";
		$result = mysqli_query($connect,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck>0)
		{	//insert data into runrace table
			while($row=mysqli_fetch_assoc($result))
			{
				
				foreach($_POST['check_list'] as $selected)
				{
					$rid = $row['RUN_ID'];
					$raid = $selected;
					$sql = "INSERT INTO RUNRACE(RUN_ID, RACE_ID)
					VALUES ('$rid','$raid');";
					
					mysqli_query($connect,$sql);
					
				}
				
			}

		}
	}
}
echo "<script type='text/javascript'>alert('Successfully Registered for the Selected Races')</script>";
header("Location: ../run.php?add=success");
?>

