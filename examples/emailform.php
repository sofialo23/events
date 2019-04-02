<?php

function checkUser($sid){
	include ('conn.php');
          global $db;
          $query = mysqli_query($db_link, "SELECT * FROM users WHERE id = '$sid'");
          if(mysqli_num_rows($query) > 0){
              return 'true';
          }
          else{
              return 'false';
          }
}


if(isset($_POST['submit'])) {
	include ('conn.php');
	$sid = $_POST['sid'];
	/*$uemail = $_POST['uemail'];

	$uemail = mysqli_real_escape_string($db_link, $uemai);*/
	$uemail = $sid."@gms.ndhu.edu.tw";
	

	if(checkUser($sid) == "true"){

		$token = md5(time().$sid);

		  $finduser = mysqli_query($db_link, "SELECT * FROM recovery_keys WHERE userID = '$sid'");  // check if user is in the table already
          if(mysqli_num_rows($finduser) > 0){
              // update  
          		$query = mysqli_query($db_link, "UPDATE recovery_keys SET token = '$token', valid=1 WHERE userID = $sid; ");
          }
          else{
              	$query = mysqli_query($db_link, "INSERT INTO recovery_keys (userID, token) VALUES ( $sid , '$token') ");
          }
	
		 
		if($query) {
		  				//SEND EMAIL with link to renew password
        	$to = $uemail;
        	$subject = "Password Recovery";
        	$message ="<a href='http://localhost/Events/examples/forget.php?id=$sid&token=$token'> Click Here to reset your password</a>";
        	$headers = "From: esofia91@gmail.com \r\n";
        	$headers .= "MIME-Version:1.0" . "\r\n";
        	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        	mail($to, $subject, $message, $headers);
        	//header('location:login.php');//$msgclass = 'bg-danger';
        	$msg = 'A mail with recovery instruction has been sent to your email.';		 
		}
		else{	 
			$msg = 'There is something wrong.';	 
			//$msgclass = 'bg-danger';	 
		}
	}
	else{
		$msg = "This user ID doesn't exist in our database.";
		//$msgclass = 'bg-danger';
	}	            
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form action="" method="post">
		<br> <br> <br>
		<input type="text" name="sid" placeholder="Enter your student ID" required="true">
		<br> <br> <br>
		<input type="submit" name="submit" value="Reset password">
	</form>

	<?php if(isset($msg)){
		echo $msg; 
		if ($msg == "A mail with recovery instruction has sent to your email.") 
		?><a href="login.php"> Go back to Login Page </a><?php
	
	}
    ?>
                
</body>
</html>