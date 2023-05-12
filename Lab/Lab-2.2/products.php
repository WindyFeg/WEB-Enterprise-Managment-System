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
    </style>
</head>

<body>
    <?php
    include "./navbar.php";
    ?>
    <div class="container main">
        <h2 class="text-align-center justify-content-center">Products</h2>
        <?php
        $sql = $conn->query("SELECT * FROM product");

        if ($sql->num_rows) {
            while ($row = $sql->fetch_assoc()) {
                echo '
                <div class="card card-config" style="width: 12rem;">
                    <img class="card-img-top" src="' . $row['url-img'] . '" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">' . $row['name'] . '</h5>
    
                        <p class="card-text">
                            ' . $row['description'] . '
                        </p>
    
                        <a href="#" class="btn btn-primary">' . $row['price'] . '</a>
                    </div>
                </div>
                ';
            }
        } else
            echo "0 products";
        ?>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>

    <?php
    include 'footer.php';
    ?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>