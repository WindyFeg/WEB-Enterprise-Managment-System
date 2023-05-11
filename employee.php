<?php 
   session_start();
   include "database/database.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="script.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <section class="header">
        <a href="admin.php" class="logo"><h5 class="card-title">
                    <?=$_SESSION['fname']?>
                    </br></br>
                    level: <?=$_SESSION['lv']?>
			    </h5></a>

        <nav class="navbar">
            <a href="admin.php">home</a>
            <a href="pages/department.php">department</a>
            <a>manage</a>
            <a href="logout.php">logout</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    
    <section class="services">
        <h1 class="heading-title">our services </h1>

        <div class="box-container">
            <div class="box">
                <img href="manage.php" src="images/manage.png" alt="">
                <a href="pages/department.php">department</a>
                
            </div>

            <div class="box">
                <img src="images/task.png" alt="">
                <a>manage</a>
            </div>
        </div>
    </section>

    <?php
    include_once 'template/footer.php';
    ?>

</body>
</html>
<?php }else{
	header("Location: ../index.php");
} ?>