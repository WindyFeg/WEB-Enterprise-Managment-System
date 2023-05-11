<?php
session_start();

require_once '../database/database.php';

$idlist = explode(',', $_REQUEST["idlist"]);

sleep(4);

$taskid = $_SESSION['task_id'];
$sql = "";
for ($x = 0; $x < count($idlist); $x++) {
    $idtemp = $idlist[$x];
    $sql = "INSERT INTO `assign_task` (`task_id`, `emp_id`) VALUES ('$taskid', '$idtemp')";
    $result = $conn->query($sql);
}

echo "ID Employee: " . implode(',', $idlist) . " has been assigned to task id: " . $taskid . " successfully.";