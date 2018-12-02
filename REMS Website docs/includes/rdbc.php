<?php

$DB_HOSTNAME="localhost";
$DB_USERNAME="root";//can define your own user
$DB_PASSWORD="";//by default, No Password
$DB_DBNAME="racedb";

//CREATING CONNECTION
$connect=mysqli_connect($DB_HOSTNAME,$DB_USERNAME,$DB_PASSWORD,$DB_DBNAME);

?>