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


// Check if the database exits
if ($connect->select_db("ManageSys")) {
    // Drop database if it exists
    $connect->query("DROP DATABASE ManageSys");
    echo "Database ManageSys dropped successfully";
} else {
    echo "Database ManageSys does not exist";
}
$database = "CREATE DATABASE ManageSys";

if (mysqli_query($connect, $database)) {
    echo "Database created.";
} else {
    echo "Error creating database: " . mysqli_error($connect);
}

include("createtb.php");

// mysqli_close($connect);

?>