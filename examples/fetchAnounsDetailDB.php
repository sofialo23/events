<?php 
	header('Content-Type: application/json');

	if(isset($_POST["activityId"]))
	{
		include("connectionDB.php");
		$activityId = $_POST["activityId"];
		$query_anouns = "";
		$result_anouns = mysqli_query($db_link,$query);
		
	}
?>