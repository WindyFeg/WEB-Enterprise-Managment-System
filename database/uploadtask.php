<?php
session_start();
include_once "database.php";

#20Mb 
$require = 1024 * 20 * 8;

if (isset($_FILES['userfile'])) {
    # If file uploaded
    if ($_FILES['userfile']['tmp_name']) {
        //Check size requirement 
        echo "File size :\n";
        echo $_FILES['userfile']['size'] . " byte";

        if ($_FILES['userfile']['size'] > $require) {
            exit('File size exceeds maximum requirement.');
        }
        $uploaddir = '../task/upload/';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

        echo "<div>File Location :\n";
        echo $uploadfile . "</div>";

        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {

            // $filePointer = fopen($uploadfile, 'r');
            // $fileData = fread($filePointer, filesize($uploadfile));
            // $fileData = addslashes($fileData);
            // fclose($filePointer);

            $fileName = $_FILES['userfile']['name'];

            $upload = "INSERT INTO task(tName,descrip, deadline,  boss_id) VALUES ('$fileName','$uploadfile', CURRENT_TIMESTAMP, '1');";

            if (mysqli_query($conn, $upload)) {

                $sql = "SELECT * FROM `task` WHERE tName = '$fileName'";
                $result = $conn->query($sql);
                $res = $result->fetch_assoc();

                echo "<div>------------</div>";
                echo "Task ID: " . $res['task_id'];
                $_SESSION['task_id'] = $res['task_id'];
                echo $_SESSION['task_id'];
                echo "Task Description submitted successfully\r\n";
            } else {
                echo "Failed to submit task.\r\n";
            }
        } else {
            echo "Failed to upload file.\r\n";
        }
    }
} else {
    echo "Failed no 'userfile' set!";
}
?>