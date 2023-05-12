HOME
<div> Manage </div>
<a href="http://localhost/WEB-Enterprise-Managment-System/index.php">Home</a>
<!-- <?php
// if (isset($_GET['error'])) {
//     if ($_GET['error'] == "wronglogin") {
//         echo "<p id=\"error\">Incorrect username or password!</p>";
//     } elseif ($_GET['error'] == "loginFailed") {
//         echo "<p id=\"error\">Something went wrong!</p>";
//     } elseif ($_GET['error'] == "usernameShort") {
//         echo "<p id=\"error\">Username must be at least 4 characters!</p>";
//     } else {
//         $user = $_GET['error'];
//         echo "<script>document.getElementById(\"username\").value=\"$user\";</script>";
//         echo "<p id=\"error\">Incorrect username or password!</p>";
//     }
// }


?> -->
<?php
    include_once 'template/header.php';
?>
<!-- <section class="home">

    <div class="swiper home-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide" style = "background:url(images/creative.png) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3> Growing together is a common objective </h3>
                </div>
            </div>
            <div class="swiper-slide" style = "background:url(images/learning.png) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3> Growing together is a common objective </h3>
                </div>
            </div>
           <div class="swiper-slide" style = "background:url(images/develop.png) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3> Growing together is a common objective </h3>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

</section> -->



<section class="services">
    <h1 class="heading-title">our services </h1>

    <div class="box-container">
        <div class="box">
            <img href="manage.php" src="images/manage.png" alt="">
            <a href="department.php">department</a>
            
        </div>

        <div class="box">
            <img src="images/task.png" alt="">
            <a href="department.php">manage</a>
        </div>
    </div>
</section>

<?php
    include_once 'template/footer.php';
?>