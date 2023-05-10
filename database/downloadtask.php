<?php

// Need form for download task file. 

include_once "database.php";
//Need post/get to have task_id here
$taskid = 1;
$sql = "SELECT * FROM task WHERE task_id=" . $taskid . "";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $dir = '/task/upload/';
        $task = $dir . $row["descrip"];

        if (file_exists($task)) {
            //Define http header
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header("Cache-Control: no-cache, must-revalidate");
            header("Expires: 0");
            header('Content-Disposition: attachment; filename="' . basename($task) . '"');
            header('Content-Length: ' . filesize($task));
            header('Pragma: public');

            //Clear output buffer
            flush();

            //download file
            readfile($task);
            die();
        } else {
            echo "Cannot found task.\r\n";
        }
    }
}

header("http://localhost/index.php?manageid=1");


?>