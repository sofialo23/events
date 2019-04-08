<?php

	include("connectionDB.php");
	$alldate = $_POST["alldate"];
	$finalTime = $alldate[2] + " " + $alldate[3] ;
	
    $query_insert_activity = "Insert into activity_info(activity_name, 
    	activity_host_depto, activity_date, activity_info, 
    	activity_staff_limit,activity_staff_counter,activity_creator, 
    	activity_place) VALUES('".$alldate[0]."','".$alldate[1]."','".$alldate[7]."','".$alldate[6]."',".$alldate[5].",0, 'first','".$alldate[4]."');";
	
	$result_query_insert = mysqli_query($db_link,$query_insert_activity);
	if($result_query_insert)
	{
		echo "Success";
	}
?>