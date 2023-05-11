<?php
session_start();

require_once '../database/database.php';

$idlist = explode(',', $_REQUEST["data"]);

echo $_REQUEST["data"];
$sql = "";
for ($x = 0; $x < count($idlist); $x++) {
    $idtemp = $idlist[$x];
    $sql = "DELETE FROM `assign_task` WHERE emp_id =" . $idtemp;
    $result = $conn->query($sql);
    echo "<div>User id: " . $idtemp . " has been deleted from task successfully.</div>";
}