<?php
session_start();
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
</head>

<body>
    <?php include "./app/view/components/navbar.php"; ?>

    <div class="container">
        <div class="login-layout mb-2">
            <h2 class="d-flex justify-content-center">User information</h2>

            <?php
            include './config/db.php';

            $sql = 'SELECT * FROM user u WHERE u.username = "' . $_SESSION['login']['name'] . '"';
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                echo '
                <div class="displayCell">
                    <label for="email" class="ml-2 pb-0 mb-0 mt-4"><h6>Username</h6> </label>
                    <div class="mx-0 px-3 py-2 w-dashboard">' . $row['username'] . '</div>
                </div>
                ';

                $output_password = str_repeat('*', strlen($row['password']));
                echo '
                <div class="displayCell">
                    <label for="email" class="ml-2 pb-0 mb-0 mt-4"><h6>Username</h6> </label>
                    <div class="mx-0 px-3 py-2 w-dashboard">' . $output_password . '</div>
                </div>
                ';

                echo '
                <div class="displayCell">
                    <label for="email" class="ml-2 pb-0 mb-0 mt-4"><h6>Level</h6> </label>
                    <div class="mx-0 px-3 py-2 w-dashboard">' . $row['role'] . '</div>
                </div>
                ';

                echo '
                <div class="displayCell">
                    <label for="email" class="ml-2 pb-0 mb-0 mt-4"><h6>Address</h6> </label>
                    <div class="mx-0 px-3 py-2 w-dashboard">' . $row['address'] . '</div>
                </div>
                ';

                echo '
                <div class="displayCell">
                    <label for="email" class="ml-2 pb-0 mb-0 mt-4"><h6>Phone</h6> </label>
                    <div class="mx-0 px-3 py-2 w-dashboard">' . $row['phone'] . '</div>
                </div>
                ';
            } else echo "You have to login first";
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./public/js/navbar.js"></script>
</body>

</html>