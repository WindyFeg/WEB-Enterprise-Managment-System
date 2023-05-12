<?php
include "database/database.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>

    <head>
        <title>HOME</title>
    </head>

    <body>
        <section class="header">
            <a href="admin.php" class="logo">
                <h5 class="card-title">
                    <?= $_SESSION['fname'] ?>
                    </br></br>
                    level:
                    <?= $_SESSION['lv'] ?>
                </h5>
            </a>

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

<?php } else {
    header("Location: ../index.php");
} ?>