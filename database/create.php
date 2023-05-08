<?php
$servername = "localhost" ;
$username = "username" ;
$password = "password" ;

$connect = mysqli_connect(
    $servername , 
    $username , 
    $password
) ;

if (!$connect) {
    die("Connection failed: ". mysqli_connect_error()) ;
}

$database = "CREATE DATABASE ManageSys" ;

if (mysqli_query($connect, $database)) {
    echo "Database created." ;
}
else {
    echo "Error creating database: " . mysqli_error($connect) ;
}

include("createtb.php") ;

mysqli_close($connect) ;

?>
