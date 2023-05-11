<?php
session_start();

require_once '../database/database.php';

$task_id = $_REQUEST["data"];

$sql = "SELECT * FROM `task` WHERE task_id = $task_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "File name: " . $row["tName"];
echo "<div> Deadline: " . $row["deadline"] . "</div>";

$sql = "SELECT * FROM `user` WHERE id  =" . $row["boss_id"];
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<div>---------------------------</div>";
echo "<div>From: " . $row["fname"] . "</div>";
echo "<div>From: " . $row["email"] . "</div>";