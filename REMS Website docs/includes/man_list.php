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