<?php
$servername = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect(
    $servername,
    $username,
    $password
);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}


// // Check if the database exits
// if (mysqli_select_db($connect, "ManageSys")) {
//     // Drop database if it exists
//     $dropdb = "DROP DATABASE IF EXISTS ManageSys" ;
//     mysqli_query($connect, $dropdb) ;
//     echo "Database ManageSys dropped successfully";
// } else {
//     echo "Database ManageSys does not exist";
// }

// Drop database if it exists
$dropdb = "DROP DATABASE IF EXISTS ManageSys" ;
if (mysqli_query($connect, $dropdb)) {
    echo "Database ManageSys dropped successfully." . "\r\n" ;
}
else {
    echo "Database ManageSys does not exist." . "\r\n" ;
}

$database = "CREATE DATABASE ManageSys";
if (mysqli_query($connect, $database)) {
    echo "Database created." . "\r\n" ;
} else {
    echo "Error creating database: " . mysqli_error($connect) . "\r\n" ;
}

include("createtb.php");

// mysqli_close($connect);

?>