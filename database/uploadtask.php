<?php
include_once "database.php";

#20Mb 
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

            $filePointer = fopen($uploadfile, 'r');
            $fileData = fread($filePointer, filesize($uploadfile));
            $fileData = addslashes($fileData);

            $upload = "INSERT INTO task(descrip, deadline,  boss_id) VALUES ('$fileData', CURRENT_TIMESTAMP, '1');";

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