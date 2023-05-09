<?php
include_once "database.php";

#1.2Mb 
$require = 1024 * 20 * 8;

if (isset($_POST['submit'])) {
    # If file uploaded
    if ($_FILES['userfile']['tmp_name']) {
        //Check size require 
        echo "DUNG LƯỢNG FILE :\n";
        echo $_FILES['userfile']['size'];

        if ($_FILES['userfile']['size'] > $require) {
            exit('File size exceeds maximum requirement.');
        }
        $uploaddir = '../task/upload/';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

        echo "   ĐƯỜNG DẪN :\n";
        echo $uploadfile;

        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {

            //Need to find taskid hereee
            $taskid = 1;

            // $upload = "UPDATE task SET descrip=".$uploadfile." WHERE task_id=".$taskid."" ;
            $upload = "INSERT INTO task(task_id, descrip) VALUES (" . $taskid . ", " . $uploadfile . ")";
            if (mysqli_query($conn, $upload)) {
                echo "Task Description submitted.\r\n";
                echo "File uploaded.\r\n";
            } else {
                echo "Failed to submit task.\r\n";
            }
        } else {
            echo "Failed to upload file.\r\n";
        }
    }
}


?>