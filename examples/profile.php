
<?php
	include("conn.php");
	session_start();
	$name = $_SESSION['name'];
	echo "Welcome "; echo $name;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	You have been successfully logged in
</body>
</html>