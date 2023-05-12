<?php
session_unset();
session_destroy();
echo 'logout ok';
header("Location: ../index.php");