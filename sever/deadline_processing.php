<?php
session_start();

require_once '../database/database.php';

$userid = $_REQUEST["userid"];

$sql = "SELECT * FROM `employee` AS e, (SELECT * FROM `user` AS u LEFT JOIN (SELECT  emp_id,tName,descrip,deadline,comment,boss_id,at.task_id	 FROM `assign_task` AS at, `task` AS t WHERE at.task_id = t.task_id) AS t ON u.id = t.emp_id 
) AS m WHERE m.id =  e.id AND m.id = " . $userid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();


// check if row is not null
if (!isset($row["task_id"])) {
    echo "<div>No deadline</div>";
    return;
} else {

    echo "<a href='../database/downloadtask.php?path=" . $row["descrip"] . "'>";
    echo '<svg class="deadline-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">';
    echo '<path
            d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm48 96a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm0 240a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm0-192c-8.8 0-16 7.2-16 16v80c0 8.8 7.2 16 16 16s16-7.2 16-16V288c0-8.8-7.2-16-16-16z" />';
    echo "</svg>";
    echo "  " . $row['tName'];
    echo "</a>";
    echo "<div style='color: red;'>" . $row['deadline'] . "<div>";
}