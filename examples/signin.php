<?php
	$error = NULL;
	include ('conn.php');

	if(isset($_POST['subForm'])){
		$name = $_POST['name'];
		$pw = $_POST['pw'];
		$p2 = $_POST['p2'];
		$student_id = $_POST['student_id'];
		$email = $student_id."@gms.ndhu.edu.tw";

		//CHECK IF THAT STUDENT ID HAS ALREADY BEEN REGISTERED
		$available = mysqli_query($db_link,"SELECT * FROM USERS WHERE id = '$student_id'");

		if ($available){
			//$error = "This student id has already been registered";
			?> <script> alert("This student id has already been registered! \n go to Login Page" ); </script> 
			<a href="login.php"> Go to Login Page </a> <?php 
		}

		if($pw != $p2){
			$error = "your passwords DO NOT match";
		}
		else{
				// GENERATE VKEY
			$vkey = md5(time().$name);
			
				// INSERT ACCOUNT INTO DB
			$pw = md5($pw);
			$sql = "INSERT INTO users (name, id, email, pw, vkey) values ('$name', '$student_id', '$email', '$pw', '$vkey')";
			
        $result = mysqli_query($db_link,$sql);
        echo $result;
        if($result){
        				//SEND EMAIL
        	$to = $email;
        	$subject = "Email Verification";
        	$message ="<a href='http://localhost/email_test/verify.php?vkey=$vkey'> Click Here to register your account</a>";
        	$headers = "From: esofia91@gmail.com \r\n";
        	$headers .= "MIME-Version:1.0" . "\r\n";
        	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        	mail($to, $subject, $message, $headers);
        	header('location:thankyou.php');
        }
       
		}
	}
?>


<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<form method="POST">
		<table align="center" cellpadding="8">
			<tr>
				<td>Name: </td>
				<td> <input type="Text" name="name" required="true" /></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td> <input type="Password" name="pw" required="true" /></td>
			</tr>
			<tr>
				<td>Confirm Password: </td>
				<td> <input type="Password" name="p2" required="true" /></td>
			</tr>
			<tr>
				<td>Student ID: </td>
				<td> <input type="text" name="student_id" required="true"/></td>
			</tr>
			<tr>
				<td><input type="submit" name="subForm" value="Register"> </td>
			</tr>
		</table>
	
	</form>


<?php
	echo $error;
?>

</body>
</html>

