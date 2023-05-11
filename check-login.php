<?php  

//login login 
session_start();
include "database/database.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['lv'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$lv = test_input($_POST['lv']);

	if (empty($username)) {
		header("Location: index.php?error=User Name is Required");
	}else if (empty($password)) {
		header("Location: index.php?error=Password is Required");
	}else {

		// Hashing function
		$password = md5($password);
        
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] === $password && $row['lv'] == $lv) {
        		$_SESSION['fname'] = $row['fname'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['lv'] = $row['lv'];
        		$_SESSION['username'] = $row['username'];

        		header("Location: redirect.php");

        	}else {
        		header("Location: index.php?error=Incorect User name or password");
        	}
        }else {
        	header("Location: index.php?error=Incorect User name or password");
        }

	}
	
}else {
	header("Location: index.php");
}