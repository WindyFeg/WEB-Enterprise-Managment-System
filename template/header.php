<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="assets/index.css">
    <link rel="stylesheet" href="script.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
=======
    <link rel="stylesheet" href="script.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
>>>>>>> nguyen
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
.front{
    margin: 0px;
}
        .dropdown:hover .dropdown-content {
        display: block;
        }
    </style>
</head>

<section class="header">
<<<<<<< HEAD
    <a href="../index.php?page=home" class="logo">Comany</a>
    <h4 class="card-title">
        <?php
        if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
            echo "User:";
            echo $_SESSION['fname'];
            echo "level:";
            echo $_SESSION['lv'];
        }
        ?>
    </h4>
    <nav class="navbar">
        <a href="../index.php?page=home">home</a>
        <a href="../index.php?page=depart">department</a>
        <a href="../index.php?page=manage">manage</a>
        <?php

        if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
            echo '<a href="../index.php?page=logout">logout</a>';
        }
        ?>
=======
    <a href="home.php" class="logo">Comany</a>


    <nav class="navbar">
        <a href="http://localhost/web-main/index.php">home</a>
        <!-- <a href="pages/department.php">department</a> -->
        
        <div class="dropdown">
            <!-- <span>Department</span> -->
                <a href="">
                    <?php //echo $_SESSION['department']; ?>
                    Department
                </a>
            <div class="dropdown-content">
                <div><a href="http://localhost/WEB-Enterprise-Managment-System/pages/privateEmploy.php?name=IT">IT</a> </div>
                <div><a href="http://localhost/WEB-Enterprise-Managment-System/pages/privateEmploy.php?name=CSE">CSE</a> </div>
                <div><a href="http://localhost/WEB-Enterprise-Managment-System/pages/privateEmploy.php?name=Creative">Creative</a> </div>
                <div><a href="http://localhost/WEB-Enterprise-Managment-System/pages/privateEmploy.php?name=Spacetech">SpaceTech</a> </div>
                <div><a href="http://localhost/WEB-Enterprise-Managment-System/pages/privateEmploy.php?name=NetworkSecurity">NetworkSecurity</a> </div>
                <div><a href="http://localhost/WEB-Enterprise-Managment-System/pages/privateEmploy.php?name=Defense">Defense</a> </div>
                <div><a href="http://localhost/WEB-Enterprise-Managment-System/pages/privateEmploy.php?name=NLP">NLP</a> </div>
                <div><a href="http://localhost/WEB-Enterprise-Managment-System/pages/privateEmploy.php?name=Manage">Manage</a> </div>
            </div>
        </div>

            <a href="manage.php">manage</a>
        <div class="dropdown">
            <div href="">login</div>

            <div class="dropdown-content">
                
            
        <form action="sever/authentication.php" method="post">
        <input type="text" name="username" style="margin-bottom: 5px;" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="submit" style="margin-left: 5px;">Login</button>
        </form>


            </div>
        </div>   
        <?php echo 'userLevel: ' . $_SESSION["userlevel"] . '</br>'; ?>



<a href="http://localhost/WEB-Enterprise-Managment-System/index.php?page=home" onclick="<?php $_SESSION["userlevel"] = -1;?>">Logout</a>     
>>>>>>> nguyen
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

<<<<<<< HEAD
</section>
=======
</section>

<!-- Login UI
<form action="../sever/authentication.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="submit">Login</button>
</form> -->
>>>>>>> nguyen
