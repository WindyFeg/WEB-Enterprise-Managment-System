
<?php 
// this code is for redirecting to different pages if the credentials are correct.
   session_start();
   include "database/database.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   
         //admin
      	if ($_SESSION['lv'] == "1"){
			header("Location: admin.php");
      	 }
		 //department head
		 else if ($_SESSION['lv'] == "2"){ 
			header("Location: depart.php");
      	} 
		//student
		  else if ($_SESSION['lv'] == "3"){ 
			header("Location: employee.php");	
		}
		
 }
else{
	header("Location: index.php");
} ?>
