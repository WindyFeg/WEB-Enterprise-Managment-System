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
            <h2 class="d-flex justify-content-center">Register to Online Store</h2>
            <form method="POST" action="register_processing.php" id="mainForm" name="mainForm">
                <div class="displayCell">
                    <label class="ml-2 pb-0 mb-0 mt-4"><h6>Username</h6></label>
                    <input class="mx-0 px-3 py-2 w-dashboard" type="text" name="usernameRegister" id="usernameRegister" placeholder="Username" required>
                </div>
                <div id="v_uname_register" class="ml-2">
                    <p id="_uname_re" class="invalid" style="margin-bottom: 0px">* Username is email</p>
                </div>

                <div class="displayCell">
                    <label class="ml-2 pb-0 mb-0 mt-4"><h6>Password</h6></label>
                    <input class="mx-0 px-3 py-2 w-dashboard" type="text" name="passwordRegister" id="passwordRegister" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                </div>
                <div id="v_pword_register" class="ml-2">
                    <p id="letter_pword_re" class="invalid" style="margin-bottom: 0px">* At least 1 lowercase character</p>
                    <p id="capital_pword_re" class="invalid" style="margin-bottom: 0px">* At least 1 capital character</p>
                    <p id="number_pword_re" class="invalid" style="margin-bottom: 0px">* At least 1 number</p>
                    <p id="length_pword_re" class="invalid" style="margin-bottom: 0px">* At least 8 characters</p>
                </div>                            

                <div class="displayCell">
                    <label class="ml-2 pb-0 mb-0 mt-4"><h6>Level</h6></label>
                    <div id="radioSelection">
                        <div style="display: inline-block; width: 50%;">
                            <input class="ml-4 mr-2" type="radio" name="getLevel" id="level_admin" value="Admin">
                            <label for="level_admin" class="mb-0" style="height: 100%">Admin</label>
                        </div>
                        <input class="ml-4 mr-2" type="radio" name="getLevel" id="level_customer" value="Customer">
                        <label for="level_customer">Customer</label>
                    </div>
                </div>
                <div id="v_level_register" class="ml-2">
                    <p id="_level_re" class="invalid" style="margin-bottom: 0px">* You must choose one of them</p>
                </div>
                            
                <div class="displayCell">
                    <label class="ml-2 pb-0 mb-0 mt-4"><h6>Address</h6></label>
                    <input class="mx-0 px-3 py-2 w-dashboard" type="text" name="addressRegister" id="addressRegister" placeholder="Address" required>
                </div>
                <div id="v_address_register" class="ml-2">
                    <p id="_char_re" class="invalid" style="margin-bottom: 0px">* Must contain characters</p>
                    <p id="_num_re" class="invalid" style="margin-bottom: 0px">* Your address has to contain number</p>
                </div>                

                <div class="displayCell">
                    <label class="ml-2 pb-0 mb-0 mt-4"><h6>Phone</h6></label>
                    <input class="mx-0 px-3 py-2 w-dashboard" type="text" name="phoneRegister" id="phoneRegister" placeholder="Phone" required>
                </div>
                <div id="v_phone_register" class="ml-2">
                    <p id="_phone_re" class="invalid" style="margin-bottom: 0px">* Numbers only</p>
                </div>                
                            
                <button type="submit" class="btn btn-primary mt-4" value="Submit">Register</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./public/js/navbar.js"></script>
    <script src="./public/js/validationRegister.js"></script>
</body>

</html>