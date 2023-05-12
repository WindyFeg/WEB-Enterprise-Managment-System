<?php
include "database/database.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>

    <title>HOME</title>

    <body>


        <section class="services">
            <h1 class="heading-title">our services </h1>

            <div class="box-container">
                <div class="box">
                    <img href="../index.php?page=department" src="images/manage.png" alt="">
                    <a href="../index.php?page=department">department</a>

                </div>

                <div class="box">
                    <img src="images/task.png" alt="">
                    <a href="../index.php?page=manage">manage</a>
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