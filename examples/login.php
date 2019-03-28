<?php
	$error = NULL;
	if (isset($_POST['submit'])){
		include ('conn.php');
		$id = $_POST['student_id'];
		$pw = $_POST['pw'];
		$pw = md5($pw);
			//query the DB
		$query = "SELECT * FROM users WHERE id='$id' AND pw = '$pw' LIMIT 1";
		$resultSet = mysqli_query($db_link, $query);
		if(mysqli_num_rows($resultSet) != 0 ){
				//PROCESS LOGIN 
			while($row = mysqli_fetch_assoc($resultSet)){
		    	$verified = $row['verified'];
		    	$email = $row['email'];
		    	$date = $row['signupdate'];
		    	$date = strtotime($date);
		    	$date = date('M d Y', $date);
		    	if($verified == 1){
		    		//KEEP PROCESSING 
		    		header('location:profile.php');
		    	}
		    	else{
		    		$error = "This account has not yet been verified. And email was sent to $email on $date";
		    	}
		    print "\r\n";
			}
		}
		else{
			// INVALID CREDENTIALS
			$error = "The username or password you entered is incorrect";
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
				<td>Student ID: </td>
				<td> <input type="text" name="student_id" required="true" /></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td> <input type="Password" name="pw" required="true"/></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Login"> </td>
			</tr>
		</table>
		
	</form>
	<?php 
		echo $error;
	?>
</body>
</html>