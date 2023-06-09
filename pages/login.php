<?php
//login template
// session_unset();
// session_destroy();

if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) { ?>
    <!-- echo 'login processing'; -->
    <!DOCTYPE html>
    <html>

    <head>
        <title>multi-user</title>
    </head>

    <body>
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
            <form class="border shadow p-3 rounded" action="../sever/check-login.php" method="post" style="width: 450px;">
                <h1 class="text-center p-3">LOGIN</h1>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_GET['error'] ?>
                    </div>
                <?php } ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="mb-1">
                    <label class="form-label">Level:</label>
                </div>
                <select class="form-select mb-3" name="lv" aria-label="Default select example">
                    <option selected value="1">1 - Admin</option>
                    <option value="2">2 - Department Head</option>
                    <option value="3">3 - Employee</option>

                </select>

                <button type="submit" class="btn btn-primary">LOGIN</button>
            </form>
        </div>
    </body>

    </html>
<?php } else {
    header("Location: redirect.php");
} ?>