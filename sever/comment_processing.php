<?php
require_once '../database/database.php';

$data = explode("//", $_REQUEST["data"]);
$taskid = $data[0];
$cmt = $data[1];

$sql = "SELECT comment FROM `task` WHERE task_id = " . $taskid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($row)) {

    $commentFromDB = $row['comment'];

    echo "<h5> Comment section - TaskID: " . $taskid . "</h5>";
    echo "Comment from DB: " . $commentFromDB . $cmt;
} else {
    echo "<h5> There is no Task/Result on - TaskID: " . $taskid . " </h5>";
}

?>