<?php
session_start();
include_once "database.php";

#20Mb 
$require = 1024 * 20 * 8;

if (isset($_POST['submit'])) {
    # If file uploaded
    if ($_FILES['userfile']['tmp_name']) {
        //Check size requirement 
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

            // $filePointer = fopen($uploadfile, 'r');
            // $fileData = fread($filePointer, filesize($uploadfile));
            // $fileData = addslashes($fileData);
            // fclose($filePointer);

            $fileName = $_FILES['userfile']['name'];

            $upload = "INSERT INTO task(tName,descrip, deadline,  boss_id) VALUES ('$fileName','$uploadfile', CURRENT_TIMESTAMP, '1');";

            if (mysqli_query($conn, $upload)) {

                echo $fileName;
                $sql = "SELECT * FROM `task` WHERE tName = '$fileName'";
                echo $sql;
                $result = $conn->query($sql);
                $res = $result->fetch_assoc();


                echo "--------";
                echo $res['task_id'];
                $_SESSION['task_id'] = $res['task_id'];

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