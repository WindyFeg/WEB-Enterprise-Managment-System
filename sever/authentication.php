<?php
session_start();
?>

<?php
//Form validation Server side 
if (isset($_POST['submit'])) {

    require_once '../database/database.php';
    require_once '../utils/function.php';

    $username = serverCheckValidity($_POST['username']);
    $password = serverCheckValidity($_POST['password']);

    echo $username;
    echo $password;

    //$ Check for empty input
    if (emptyInputLogin($username, $password) !== false) {
        header("location: ../index.php?page=login&error=emptyinput");
        exit();
    }

    // //$ Check if user exists
    loginUser($conn, $username, $password);
} else {
    header("location: ../index.php?page=home");
    exit();
}

//header ("Location: http://localhost/WEB-Enterprise-Managment-System/index.php?page=admin");