<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "OnlineStore";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connectio failed: " . $conn->connect_error);
}

// $sql = $conn->query("SELECT * FROM user");

// if ($sql->num_rows) {
//     while($row = $sql->fetch_assoc()){
//         echo "id: " . $row['id'] . ", username: " . $row['username'] . ", password: "  . $row['password'] . "</br>";
//     }
// } else {
//     echo "0 results";
// }

