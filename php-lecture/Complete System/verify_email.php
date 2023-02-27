<?php
     include 'dbconnect.php';
     if(isset($_GET['token']) && isset($_GET['email']) )
     {
         $token = $_GET['token'];
         $email = $_GET['email'];
         
         $sql = "UPDATE users SET verified=1 WHERE token='$token' AND email = '$email' ";
         $con = dbconnect();
    	 if ($con->query($sql) == TRUE)
    	 {  echo "Email verified"; }
    	 else
		 {
             echo "Error: <br>" . $con->error;
         }
     }
?>
