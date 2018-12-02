<?php

include_once 'rdbc.php';

$mn=$_POST['mn'];


$sql = "INSERT INTO MANAGER(MAN_NAME)
		VALUES ('$mn');";
mysqli_query($connect,$sql);


echo "adddd";
?>