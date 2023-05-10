<?php
$ServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ManageSys";

//$ Create connection
$conn = mysqli_connect(
    $ServerName,
    $dbUsername,
    $dbPassword,
    $dbName
);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn, "DROP PROCEDURE IF EXISTS `addComment` ; ");
$pro = "
CREATE PROCEDURE `addComment` (
    IN id INT, 
    IN isTask BOOLEAN, 
    IN cmt TEXT
)
BEGIN
    IF isTask = true THEN 
        UPDATE task SET comment = cmt WHERE task_id = id ;
    ELSE 
        UPDATE result SET comment = cmt WHERE result_id = id ;
    END IF ;
END ;
";
if (mysqli_query($conn, $pro)) {
    echo "Procedure created";
} else {
    echo "Error creating procedure: " . mysqli_error($conn);
}

mysqli_query($conn, "DROP FUNCTION IF EXISTS `takeComment` ;");
$pro = "
CREATE FUNCTION `takeComment` (
    IN id INT, 
    IN isTask BOOLEAN
)
RETURNS TEXT 
BEGIN
    DECLARE cmt TEXT ;
    IF isTask = true THEN
        SELECT comment INTO cmt 
        FROM task WHERE task_id = id ;
    ELSE
        SELECT comment INTO cmt 
        FROM result WHERE result_id = id ;
    END IF ;
    RETURN cmt ;
END ;
";
if (mysqli_query($conn, $pro)) {
    echo "Function created";
} else {
    echo "Error creating function: " . mysqli_error($conn);
}

mysqli_close($conn);

?>