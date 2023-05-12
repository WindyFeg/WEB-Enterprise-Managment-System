<?php
require_once './config/db.php';
$q = $_REQUEST["q"];

$hint = "";
$sql = $conn->query("SELECT * FROM product p WHERE p.name LIKE '$q%'");

while ($row = $sql->fetch_assoc()) {
    $hint .= "," . $row['name']; 
}

echo $hint;
?>