
<?php 
session_start();
if (!$_SESSION['department']) $_SESSION['department'] = 'User';

 ?>
 
<html lang="en">

<body>
<<<<<<< HEAD
	<?php
	include_once 'template/header.php';
	?>
	<div class="body">
		<?php
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
			include "pages/$page.php";
		} else if (isset($_GET['manageid'])) {
			$_SESSION['manageid'] = $_GET['manageid'];
			include "pages/manage.php";
		} else {
			include 'pages/login.php';
		}
		echo 'hello em';
		?>
	</div>
	<?php
	include_once 'template/footer.php';
	?>
=======
    <?php
    include 'template/header.php';
    ?>
    <div class="body">
        <?php
        if (isset($_GET['page'])) {
            // $page = $_GET['page'];
            // include "pages/$page.php";
            $page = $_GET['page'];
            if ($page == 'admin') include "pages/adminpage.php";
            else if ($page == 'employee') include "pages/employeepage.php";
            else if ($page == 'department') include "pages/department.php";
            else include "pages/fault.php";
        } else if (isset($_GET['manageid'])) {
            $_SESSION['manageid'] = $_GET['manageid'];
            include "pages/manage.php";
        } else {
            include 'pages/home.php';
        }
        ?>
    </div>
    <?php
    include 'template/footer.php';
    ?>
>>>>>>> nguyen
</body>

</html>

