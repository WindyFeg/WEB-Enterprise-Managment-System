<?php
session_start();

// Checking cookies
// if (!empty($_POST["remember"])) {
//     setcookie("username", $_POST["username"], time() + 3600);
//     setcookie("password", $_POST["password"], time() + 3600);
// }

// Authentification
include './config/db.php';

$unameRe = $_POST['usernameRegister'];
$pwordRe = $_POST['passwordRegister'];
$levelRe = $_POST['getLevel'];
$addressRe = $_POST['addressRegister'];
$phoneRe = $_POST['phoneRegister'];
// echo $unameRe . '</br>';
// echo $pwordRe . '</br>';
// echo $levelRe . '</br>';
// echo $addressRe . '</br>';
// echo $phoneRe . '</br>';

// Check existing account in database
$sql = 'SELECT * FROM user u WHERE u.username = "' . $u_name;
$result = $conn->query($sql);
if ($result->num_rows) {
    echo "Username existed in database, you have to change to new username";
    echo '<a href="http://localhost:8888/Lab/Lab-3.1/index.php?page=register">Register again</a>';
} else {
    // Add new account to database
    $sql = 'INSERT INTO user (username, password, role, address, phone) 
    VALUES ("'. $unameRe . '", "' . $pwordRe . '", "' . $levelRe . '", "' . $addressRe . '", "' . $phoneRe  . '")';
    // echo $sql;
    if ($conn->query($sql)) {
        echo "Adding successfully";
        echo '<a href="http://localhost:8888/Lab/Lab-3.1/index.php?page=home">Move to home page</a>';
    } else {
        echo "Impossible adding new account";
        echo '<a href="http://localhost:8888/Lab/Lab-3.1/index.php?page=register">Register again</a>';
    }
}