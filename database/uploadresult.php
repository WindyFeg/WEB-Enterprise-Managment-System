<?php
session_start();
include_once "database.php";

$emp = $_SESSION['id'];

$require = 1024 * 20 * 8;

if ($emp != 0) {
    if (isset($_FILES['userfile'])) {
        # If file uploaded
        if ($_FILES['userfile']['tmp_name']) {
            //Check size requirement 
            echo "File size :\n";
            echo $_FILES['userfile']['size'] . " byte";

            if ($_FILES['userfile']['size'] > $require) {
                exit('File size exceeds maximum requirement.');
            }
            $uploaddir = '../result/upload/';
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

            echo "<div>File Location :\n";
            echo $uploadfile . "</div>";

            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {

                // $filePointer = fopen($uploadfile, 'r');
                // $fileData = fread($filePointer, filesize($uploadfile));
                // $fileData = addslashes($fileData);
                // fclose($filePointer);

                $fileName = $_FILES['userfile']['name'];
                //Emp id here need to modify
                $upload = "INSERT INTO result(result_id, res, boss_id, emp_id) VALUES ('$fileName','$uploadfile', '1', '$emp');";

                if (mysqli_query($conn, $upload)) {

                    $sql = "SELECT * FROM `result` WHERE res = '$fileName'";
                    $result = $conn->query($sql);
                    $res = $result->fetch_assoc();

                    echo "<div>------------</div>";
                    echo "Result ID: " . $res['result_id'];
                    $_SESSION['result_id'] = $res['result_id'];
                    echo $_SESSION['result_id'];
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
} else {
    echo "Failed no owner set!";
}
?>
?>