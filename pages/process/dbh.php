<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "root";
$dBName = "ManageSys";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed __";
} 

?>