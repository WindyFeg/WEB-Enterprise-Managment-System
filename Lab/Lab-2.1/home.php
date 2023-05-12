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
    <style>
        .navbar-main {
            position: fixed;
            top: 50px;
            z-index: 1;
            width: 100%;
            display: none;
        }

        .main {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            background-color: #F5F5F7;
        }

        .footer {
            width: 100%;
            height: 200px;
            background-color: #F5F5F7;
            border: 1px solid black;
        }

        .my-class {
            background-color: #b1bc8755;
            display: inline-block;
        }

        .item-footer {
            font-size: 20px;
            color: black;
            text-align: center;
            line-height: 200px;
        }


        .content {
            display: flex;
        }


        .main-contain {
            width: calc(100% - 120px);
            height: 500px;
            flex: 5;
            background-color: yellow;
        }

        .card-config {
            display: inline-block;
            margin: 4px;
        }

        .header {
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: white;
            color: #CCCCCC;
        }

        .apple-icon {
            font-size: 30px;
            padding: 0 20px;
            display: inline-block;
        }

        .btn-login {
            width: 120px;
        }

        .btn-store {
            width: 100px;
        }


        .my-form {
            width: 400px;
        }

        .padding-left {
            padding-left: 20px;
        }

        .new-footer {}

        .searching {
            text-align: center;
        }

        .my-nav {
            text-align: center;
        }

        /* -------- CONTENT OF HOMEPAGE -------- */
        /* use */
        .w-frame-homepage {
            height: 692px;
            width: 100%;
        }

        /* use */
        .w-tag-homepage {
            height: 692px;
        }

        /* use */
        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* use */
        @media (max-width: 992px) {
            .w-frame-homepage {
                height: 500px;
                width: 100%;
            }

            .w-tag-homepage {
                height: 1000px;
            }
        }
    </style>
</head>

<body>
    <?php
    include "./navbar.php";
    ?>

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


    <?php
    include 'footer.php';
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>