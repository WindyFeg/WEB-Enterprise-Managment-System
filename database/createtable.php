<?php
include_once "database.php" ;

$sql = file_get_contents("schema.sql");
if (mysqli_multi_query($conn, $sql)) {
    echo "Tables created";
} else {
    echo "Error creating tables: " . mysqli_error($conn);
}

mysqli_close($conn);
?>