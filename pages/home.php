<!-- HOME -->
<!-- <div> Manage </div> -->
<!-- <a href="http://localhost/index.php?page=department">Manage</a> -->
<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == "wronglogin") {
        echo "<p id=\"error\">Incorrect username or password!</p>";
    } elseif ($_GET['error'] == "loginFailed") {
        echo "<p id=\"error\">Something went wrong!</p>";
    } elseif ($_GET['error'] == "usernameShort") {
        echo "<p id=\"error\">Username must be at least 4 characters!</p>";
    } else {
        $user = $_GET['error'];
        echo "<script>document.getElementById(\"username\").value=\"$user\";</script>";
        echo "<p id=\"error\">Incorrect username or password!</p>";
    }
}
?>