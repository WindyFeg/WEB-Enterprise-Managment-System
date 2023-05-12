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
    <link rel="stylesheet" type="text/css" href="./public/css/style.css?v=11">
</head>

<body>
    <?php include "./app/view/components/navbar.php"; ?>

    <div class="container">
        <div class="login-layout">
            <h2 class="d-flex justify-content-center">Login to Online Store</h2>
            <form method="POST" action="login_processing.php">
                <div class="form-group mb-2">
                    <label for="exampleInputEmail1" class="ml-1 pb-0 mb-0"><h6>Email address</h6></label>
                    <input  type="email" 
                            class="form-control mt-0" 
                            id="exampleInputEmail1" 
                            aria-describedby="emailHelp" 
                            placeholder="Email" 
                            name="username" 
                            value="<?php if (isset($_COOKIE["username"])) echo $_COOKIE["username"];?>">
                </div>

                <div class="form-group mb-2">
                    <label for="exampleInputPassword1" class="ml-1 pb-0 mb-0"><h6>Password</h6></label>
                    <input  type="password" 
                            class="form-control mt-0" 
                            id="exampleInputPassword1" 
                            placeholder="Password"
                            name="password" 
                            value="<?php if (isset($_COOKIE["password"])) echo $_COOKIE["password"]; ?>" 
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
                                                                                                                                                    
                    <div id="validatePasswordId" class="ml-2">
                        <p id="letter" class="invalid" style="margin-bottom: 0px">* At least 1 lowercase character</p>
                        <p id="capital" class="invalid" style="margin-bottom: 0px">* At least 1 capital character</p>
                        <p id="number" class="invalid" style="margin-bottom: 0px">* At least 1 number</p>
                        <p id="length" class="invalid" style="margin-bottom: 0px">* At least 8 characters</p>
                    </div>
                </div>
                
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" checked>
                    <label class="form-check-label mx-0 my-0" for="exampleCheck1">Remember me</label>
                </div>

                <button type="submit" class="btn btn-primary" value="Submit">Log in</button>
            </form>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./public/js/navbar.js"></script>
    <script src="./public/js/validationLogin.js"></script>
</body>

</html>