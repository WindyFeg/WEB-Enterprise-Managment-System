<?php
session_start();

// Checking cookies
if (!empty($_POST["remember"])) {
    setcookie("username", $_POST["username"], time() + 3600);
    setcookie("password", $_POST["password"], time() + 3600);
}

// Authentification
include './config/db.php';

$u_name = $_POST['username'];
$p_word = $_POST['password'];

$sql = 'SELECT * FROM user u WHERE u.username = "' . $u_name . '" AND u.password = "' . $p_word . '"';
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($result->num_rows) {
    $_SESSION['login']['status'] = 'Logout';
    $_SESSION['login']['id'] = $row['role'];
    $_SESSION['login']['name'] = $row['username'];
    header("Location: http://localhost:8888/Lab/Lab-3.1/index.php?page=dashboard");
} else {
    $_SESSION['login']['auth'] = "Incorrect username or password!";
    echo $_SESSION['login']['auth'];
    echo '<a href="http://localhost:8888/Lab/Lab-3.1/index.php?page=dashboard">Move to home page</a>';
    // header("Location: http://localhost:8888/Lab/Lab-3.1/index.php?page=Login");
}
