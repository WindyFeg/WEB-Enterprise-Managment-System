<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark my-0 py-0 mx-0 px-0 justify-content-center" style="height: 44px; background-color:#444444;">
    <!-- <a class="navbar-brand" href="#">
        <div class="apple-icon">
            <i class="fa-brands fa-apple"></i>
        </div>
    </a> -->

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <form method="POST" action="index.php" class="mx-2 w-form-navbar">
                    <button type="submit" name="page" value="home" class="w-btn-navbar">Home<span class="sr-only"></span></button>
                </form>
            </li>

            <li class="nav-item mr-4">
                <form method="POST" action="index.php" class="mx-2 w-form-navbar">
                    <button type="submit" name="page" value="products" class="w-btn-navbar">Products<span class="sr-only"></span></button>
                </form>
            </li>

            <li class="nav-item mx-4">
                <form class="form-inline my-lg-0" style="position: relative">
                    <div class="w-searching mx-0 my-0">
                        <input  class="form-control mx-0 px-2 py-1" type="search" 
                                placeholder="Search" 
                                aria-label="Search" 
                                onkeyup="showHint(this.value)" 
                                id="idSearchAjax">
                        <ul id="w-ajax-searching" class="px-0"></ul>
                    </div>
                </form>
            </li>

            <li class="nav-item ml-4">
                <form method="POST" action="index.php" class="mx-2 w-form-navbar">
                    <?php
                    if ($_SESSION['login']['id'] == "") {
                        echo '
                        <button type="submit" name="page" value="register" class="w-btn-navbar">
                            <div style="display: inline-block;">Register</div>
                        </button>
                        ';
                    } else {
                        echo '
                        <button type="submit" name="page" value="dashboard" class="w-btn-navbar">
                            <div style="display: inline-block; border-right: 1px solid #D9D9DA; padding-right: 5px">' . $_SESSION['login']['id'] . '</div>
                            <div style="display: inline-block;">' . $_SESSION['login']['name'] . '</div>
                        </button>
                        ';
                    }
                    ?>
                </form>
            </li>

            <li class="nav-item">
                <form method="POST" action="index.php" class="mx-2 w-form-navbar">
                    <button type="submit" name="page" value="<?php echo $_SESSION['login']['status'] ?>" class="w-btn-navbar">
                        <?php echo $_SESSION['login']['status'] ?><span class="sr-only"></span>
                    </button>
                </form>
            </li>


        </ul>

    </div>
</nav>