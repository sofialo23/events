<?php
	header('Content-Type: application/json');
	if(isset($_POST["datas"]))
	{
		include("connectionDB.php");
		$data = $_POST["datas"];
		$activity_creator = $data[0];
		$activity_id = $data[1];
		$query = "Select * from activity_info where activity_creator='".$activity_creator."' 
		and activity_id=".$activity_id.";";
		$result = mysqli_query($db_link,$query);
		if($result)
		{
			$jsonvar = array();
			while($row_col = mysqli_fetch_array($result))
			{
				$array["activityid"] = $row_col["activity_id"];
				$array["activityname"]=$row_col["activity_name"];
				$array["activityhostdepto"] = $row_col["activity_host_depto"];
				$array["activitycreateddate"] = $row_col["activity_created_date"];
				$array["activitydate"] = $row_col["activity_date"];
				$array["activityinfo"] = $row_col["activity_info"];
				$array["activitystafflimit"] = $row_col["activity_staff_limit"];
				$array["activitystaffcounter"] = $row_col["activity_staff_counter"];
				$array["activitycreator"] = $row_col["activity_creator"];
				$array["activityplace"] = $row_col["activity_place"];
				
				array_push($jsonvar, $array);
			}
				$jsonstring = json_encode($jsonvar);
				echo $jsonstring;
		}
	}
	if(isset($_POST["allinfo"]))
	{
		include("connectionDB.php");
		/*
		 alldata[0] = ("#txt_activityname").val();
          alldate[1] = ("#txt_hostdepartment").val();
          alldate[2] = ("#txt_date").datepicker('getDate'); ***
          alldate[3] = ("#txt_time").val();   *****
          alldate[4] = ("#txt_activityplace").val();
          alldate[5] = chckbx;
          alldate[6] = ("#txt_activityinformation").val();
          alldate[7] = it is the whole time already put together in a variable
          alldate[8]= user who created the activity
          alldate[9] = id of the activity
	*/
          $allinfo = $_POST["allinfo"]; 	 
          $query_update_activity = "Update `activity_info` SET `activity_name` = '".$allinfo[0]."',
           `activity_host_depto`='".$allinfo[1]."', `activity_date`='".$allinfo[7]."',
            `activity_info`='".$allinfo[6]."', `activity_staff_limit`=".$allinfo[5].", `activity_place`='".$allinfo[4]."'
            Where `activity_info`.`activity_id`=".$allinfo[9]." and 
            `activity_info`.`activity_creator`='".$allinfo[8]."'";
          $result = mysqli_query($db_link,$query_update_activity);
          if($result)
          	{	
          		echo "success";
          	}
	}
?>