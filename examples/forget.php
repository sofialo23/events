<?php
include ('conn.php');

function verifytoken($userID, $token){	
	global $db_link;
	$query = mysqli_query($db_link, "SELECT valid FROM recovery_keys WHERE userID = $userID AND token = '$token'");
	$row = mysqli_fetch_assoc($query);
	
	if(mysqli_num_rows($query) > 0){
		if($row['valid'] == 1){
			return 1;
		}else{
			return 0;
		}
	}else{
		return 0;
	}
}

$userID = $_GET['id'];
$token = $_GET['token'];
$uemail = $userID."@gms.ndhu.edu.tw";

$verifytoken = verifytoken($userID, $token);

if(isset($_POST['submit'])){

	$new_password = $_POST['new_password'];
	$new_password = md5($new_password);
	$retype_password = $_POST['retype_password'];
	$retype_password = md5($retype_password);
	
	if($new_password == $retype_password){
		$update_password = mysqli_query($db_link, "UPDATE users SET pw = '$new_password' WHERE id = $userID");
		if($update_password){
				mysqli_query($db_link, "UPDATE recovery_keys SET valid = 0 WHERE userID = $userID AND token ='$token'");
				$msg = 'Your password has been changed successfully. Please login with your new password.';?>
				
				<a href="login.php"> Go to Login Page </a>
				<?php echo $msg;
		}
	}
	else{
		 $msg = "Password doesn't match";
		// $msgclass = 'bg-danger';
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<?php if($verifytoken == 1) { ?>
		<form action="" method="post">
			<br> <br> <br>
			Enter your password: 
			<input type="password" name="new_password" required="true">
			<br>  <br>
			Confirm your password: 
			<input type="password" name="retype_password" required="true">
			<br> <br> <br>
			<input type="submit" name="submit" value="Reset password">
		</form>
	<?php }else {?>
   		    	<h2>Invalid or Broken Token</h2>
	           <p>Opps! The link you have come with is maybe broken or already used. Please make sure that you copied the link correctly or request another token from <a href="emailform.php">here</a>.</p>
      <?php }?>
                
</body>
</html>