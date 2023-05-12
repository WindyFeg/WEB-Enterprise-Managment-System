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
    <link rel="stylesheet" type="text/css" href="./public/css/style.css?v=7">
    <style>
        .active-pagination {
            background-color: blue;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    include "./app/view/components/navbar.php";
    ?>

    <div class="container main">
        <!-- <h2 class="text-align-center justify-content-center">Products</h2> -->
        <?php
        $startIndex = ($p - 1) * $numberOfItemPerPage;
        $statement = 'SELECT * FROM product LIMIT ' . $numberOfItemPerPage . ' OFFSET ' . $startIndex;
        $statement2 = 'SELECT * FROM product';
        $sql2 = $conn->query($statement2);
        $sql = $conn->query($statement);

        if ($sql->num_rows) {
            while ($row = $sql->fetch_assoc()) {
                echo '
                <div class="card card-config" style="width: 12rem;">
                    <img class="card-img-top" src="' . $row['url-img'] . '" alt="Card image cap" loading="lazy">
                    <i class="fa-solid fa-cart-shopping"></i>
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

            $numberOfItem = mysqli_num_rows($sql2);
            $numberOfPage = ceil($numberOfItem / $numberOfItemPerPage);

            echo '
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>';
            // <li class="page-item"><a class="page-link" href="#">1</a></li>
            // <li class="page-item"><a class="page-link active-pagination" href="#">2</a></li>
            // <li class="page-item"><a class="page-link" href="#">3</a></li>

            for ($i = 1; $i <= $numberOfPage; $i++) {
                // echo '<li class="page-item"><a class="page-link" href="#">' . $i. '</a></li>'
                if ($p == $i) {
                    echo '<li class="page-item"><a class="page-link active-pagination" href="http://localhost:8888/Lab/Lab-4.1/index.php?page=products&p=' . $i . '$itemPerPage=' . $numberOfItemPerPage . '">' . $i . '</a></li>';
                } else {
                    echo '<li class="page-item"><a class="page-link" href="http://localhost:8888/Lab/Lab-4.1/index.php?page=products&p=' . $i . '$itemPerPage=' . $numberOfItemPerPage . '">' . $i . '</a></li>';
                }
            }


            echo '<li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            ';

            echo '
            <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="http://localhost:8888/Lab/Lab-4.1/index.php?page=products&p=1&itemPerPage=10">10</a>
                <a class="dropdown-item" href="http://localhost:8888/Lab/Lab-4.1/index.php?page=products&p=1&itemPerPage=20">20</a>
                <a class="dropdown-item" href="http://localhost:8888/Lab/Lab-4.1/index.php?page=products&p=1&itemPerPage=30">30</a>
                
            </div>
        </div>
            ';
        } else
            echo "0 products";
        ?>

    </div>

    <?php include './app/view/components/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./public/js/navbar.js"></script>
</body>

</html>
