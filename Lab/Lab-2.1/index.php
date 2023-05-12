<?php
// Sesstion
session_start();

if ($_SESSION['login']['status'] != 'Login' && $_SESSION['login']['status'] != 'Logout')
    $_SESSION['login']['status'] = 'Login';

if ($_SESSION['login']['auth'] != 'Incorrect username or password!')
    $_SESSION['login']['auth'] = '';

if (!$_SESSION['login']['id']) $_SESSION['login']['id'] = "";
if (!$_SESSION['login']['name']) $_SESSION['login']['name'] = "";

// Connect to database
require_once './config/db.php';

// Receive request
$page = 'empty';
if (isset($_GET['page']))
    $page = $_GET['page'];
else if (isset($_POST['page']))
    $page = $_POST['page'];

if ($page != 'empty') {
    switch ($page) {
        case 'home':
            require_once './home.php';
            break;
        case 'products':
            require_once './products.php';
            break;
        case 'Login':
            require_once './login.php';
            break;
        case 'Logout':
            require_once './logout.php';
            break;
        default:
            require_once './error.php';
            break;
    }
} else
    require_once './home.php';
