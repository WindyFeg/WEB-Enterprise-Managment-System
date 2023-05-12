<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/index.css">
    <link rel="stylesheet" href="script.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>My website</title>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 0px;
            z-index: 1;
            max-height: 150px;
            overflow-y: auto;
        }

        .front {
            margin: 0px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<section class="header">
    <a href="../index.php?page=home" class="logo">Comany</a>
    <h4 class="card-title">
        <?php
        if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
            echo "User: ";
            echo $_SESSION['fname'];
            echo ", level: ";
            echo $_SESSION['lv'];
        }
        ?>
    </h4>
    <nav class="navbar">
        <a href="../index.php?page=home">home</a>

        <?php
        if ($_SESSION['lv'] == 1) {
            // echo '<a href="../index.php?page=depart">department</a>';
            echo '
            <div class="dropdown">
            <!-- <span>Department</span> -->
                <a href="">department</a>
            <div class="dropdown-content">
                <div><a href="index.php?page=viewemp&&name=Sales">Sales</a> </div>
                <div><a href="index.php?page=viewemp&&name=Marketing">Marketing</a> </div>
                <div><a href="index.php?page=viewemp&&name=Finance">Finance</a> </div>
                <div><a href="index.php?page=viewemp&&name=Advertise">Advertise</a> </div>
                <div><a href="index.php?page=viewemp&&name=IT">IT</a> </div>
                </div>
            </div>
            ';
            echo '<a href="../index.php?page=manage">manage</a>';
        } else if ($_SESSION['lv'] == 3) {
            echo '<a href="../index.php?page=myprofile">My profile</a>';
        }
        ?>
        <?php

        if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
            echo '<a href="../index.php?page=logout">logout</a>';
        }
        ?>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>