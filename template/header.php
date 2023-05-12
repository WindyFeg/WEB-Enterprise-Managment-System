<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="script.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>My website</title>
</head>

<section class="header">
    <a href="home.php" class="logo">Comany</a>
    <h5 class="card-title">
        <?= $_SESSION['fname'] ?>
        </br></br>
        level:
        <?= $_SESSION['lv'] ?>
    </h5>
    <nav class="navbar">
        <a href="../index.php?page=home">home</a>
        <a href="../index.php?page=depart">department</a>
        <a href="../index.php?page=manage">manage</a>
        <?php

        if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
            echo '<a href="../logout.php">logout</a>';
        }
        ?>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- Login UI
<form action="../sever/authentication.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="submit">Login</button>
</form> -->