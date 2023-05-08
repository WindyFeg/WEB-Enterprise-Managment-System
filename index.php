<html lang="en">

<body>
    <?php
    include_once 'template/header.php';
    ?>
    <div class="body">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            include "pages/$page.php";
        } else if (isset($_GET['manageid'])) {
            $_SESSION['manageid'] = $_GET['manageid'];
            include "pages/manage.php";
        } else {
            include 'pages/home.php';
        }
        ?>
    </div>
    <?php
    include_once 'template/footer.php';
    ?>
</body>

</html>