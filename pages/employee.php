<?php
include "database/database.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>

    <head>
        <title>HOME</title>
    </head>

    <body>
        <!-- TODO: Save in my notes qk -->
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