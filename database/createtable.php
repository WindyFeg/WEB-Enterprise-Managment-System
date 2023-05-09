<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ManageSys";

$connect = mysqli_connect(
    $servername,
    $username,
    $password,
    $dbname
);
if (!$connect) {
    die("Connection error in table: " . mysqli_connect_error());
}

$sql = file_get_contents("schema.sql") ;
if (mysqli_multi_query($connect, $sql)) {
    echo "Tables created" ;
} else {
    echo "Error creating tables: " . mysqli_error($connect) ;
}

$pro = file_get_contents("procedure.sql") ;
if (mysqli_multi_query($connect, $pro)) {
    echo "Procedures created" ;
}
else {
    echo "Error creating procedures: " . mysqli_error($connect) ;
}

mysqli_close($connect);
?>