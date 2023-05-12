<?php
session_start();
$_SESSION['login']['auth'] = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Online Store</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/font/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./public/css/style.css?v=9">
</head>

<body>
    <?php include "./app/view/components/navbar.php"; ?>

    <div>
        <div class="mb-2 w-frame-homepage">
            <img src="./public/img/home/01.jpg" alt="">
        </div>

        <div class="mb-2 w-frame-homepage">
            <img src="./public/img/home/02.jpg" alt="">
        </div>

        <div class="mb-2 w-frame-homepage">
            <img src="./public/img/home/03.jpg" alt="">
        </div>

        <div class="row w-tag-homepage mx-0">
            <div class="col-md pr-1 mb-2">
                <img src="./public/img/home/04-1.jpg" alt="">
            </div>
            <div class="col-md pl-1 mb-2">
                <img src="./public/img/home/04-2.jpg" alt="">
            </div>
        </div>

        <div class="row w-tag-homepage mx-0">
            <div class="col-md pr-1 mb-2">
                <img src="./public/img/home/04-3.jpg" alt="">
            </div>
            <div class="col-md pl-1 mb-2">
                <img src="./public/img/home/04-4.jpg" alt="">
            </div>
        </div>

        <div class="row w-tag-homepage mx-0">
            <div class="col-md pr-1 mb-2">
                <img src="./public/img/home/04-5.jpg" alt="">
            </div>
            <div class="col-md pl-1 mb-2">
                <img src="./public/img/home/04-6.jpg" alt="">
            </div>
        </div>
    </div>


    <?php include './app/view/components/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./public/js/navbar.js"></script>
</body>

</html>