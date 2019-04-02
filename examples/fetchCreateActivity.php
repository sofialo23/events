<?php

	include("connectionDB.php");
	$alldate = $_POST["alldate"];
	$finalTime = $alldate[2] + " " + $alldate[3] + ":00";
	/*
		 alldata[0] = ("#txt_activityname").val();
          alldate[1] = ("#txt_hostdepartment").val();
          alldate[2] = ("#txt_date").datepicker('getDate'); ***
          alldate[3] = ("#txt_time").val();   *****
          alldate[4] = ("#txt_activityplace").val();
          alldate[5] = chckbx;
          alldate[6] = ("#txt_activityinformation").val();
	*/
    $query_insert_activity = "Insert into activity_info(activity_name, 
    	activity_host_depto, activity_date, activity_info, 
    	activity_staff_limit,activity_staff_counter,activity_creator, 
    	activity_place) VALUES('".$alldate[0]."','".$alldate[1]."','".$finalTime."','".$alldate[6]."',".$alldate[5].",0, 'first','".$alldate[4]."');";
	
	$result_query_insert = mysqli_query($db_link,$query_insert_activity);
	if($result_query_insert)
	{
		echo "Success";
	}
?>