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
    $_SESSION['login']['id'] = $row['role'] . ': ';
    $_SESSION['login']['name'] = $row['username'];
    header("Location: dashboard.php");
} else {
    $_SESSION['login']['auth'] = "Incorrect username or password!";
    header("Location: login.php");
}
