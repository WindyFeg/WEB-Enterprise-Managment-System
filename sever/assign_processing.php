<?php
session_start();

require_once '../database/database.php';

$idlist = $_REQUEST["idlist"];

sleep(3);

echo "ID Employee: " . $idlist;
echo "<div> ID Task: " . $_SESSION['task_id'] . "</div>";