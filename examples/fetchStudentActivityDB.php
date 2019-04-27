<?php
	header('Content-Type: application/json');
	if(isset($_POST["elId"]))
	{
		include("connectionDB.php");
		$elId = $_POST["elId"];
		// $activity_creator = $data[0];
		// $activity_id = $data[1];
		$query = "Select activity_info.activity_id, activity_info.activity_host_depto, activity_info.activity_name, activity_info.activity_created_date, activity_info.activity_date, activity_info.activity_staff_limit, activity_info.activity_staff_counter, activity_info.activity_creator, activity_info.activity_place, departments.name_department, activity_info.activity_info
		 from activity_info inner join departments 
		 where activity_info.activity_host_depto=departments.id_department and activity_id=".$elId.";";
		$result = mysqli_query($db_link,$query);
		if($result)
		{
			$jsonvar = array();
			while($row_col = mysqli_fetch_array($result))
			{
				$array["activityid"] = $row_col["activity_id"];
				$array["activityname"]=$row_col["activity_name"];
				$array["activityhostdepto"] = $row_col["name_department"];
				$array["activitycreateddate"] = $row_col["activity_created_date"];
				$array["activitydate"] = $row_col["activity_date"];
				$array["activityinfo"] = $row_col["activity_info"];
				$array["activitystafflimit"] = $row_col["activity_staff_limit"];
				$array["activitystaffcounter"] = $row_col["activity_staff_counter"];
				$array["activitycreator"] = $row_col["activity_creator"];
				$array["activityplace"] = $row_col["activity_place"];
				$array["activityhostid"] = $row_col["activity_host_depto"];
				

				array_push($jsonvar, $array);
			}
				$jsonstring = json_encode($jsonvar);
				echo $jsonstring;
		}
	}
	if(isset($_POST["go"]))
	{	
		//Process to join as a staff
		include("connectionDB.php");
		$go = $_POST["go"];
		$query_activity_atst = "Insert into activity_atst (user_name,activity_id,rol) VALUES('".$go[0]."',".$go[1].",".$go[2].")";
		$result = mysqli_query($db_link,$query_activity_atst);
		if($result)
		{
			alterStaff($go[1]);
		}else
		{
			echo "caca2";
		}

	}
	if(isset($_POST["chck"]))
	{	
		//Process to join as a staff
		include("connectionDB.php");
		$go = $_POST["chck"];
		$query_chck = "Select * from activity_atst where activity_atst.user_name='".$go[0]."' and activity_atst.activity_id=".$go[1]."";
		$result = mysqli_query($db_link,$query_chck);
		if(mysqli_num_rows($result)==1)
		{
			echo "success";
		}else
		{
			echo "caca";
		}
	}
	if(isset($_POST["del"]))
	{	
		//Process to join as a staff
		include("connectionDB.php");
		$del = $_POST["del"];
		$query_del = "Delete from activity_atst where user_name='".$del[0]."' and activity_id=".$del[1]."";
		$result_del = mysqli_query($db_link,$query_del);
		if($result_del)
		{
			echo "success";
		}else
		{
			echo "popo";
		}
	}
	function alterStaff($activityId)
	{
		include("connectionDB.php");
		$query_alter = "update activity_info set activity_staff_counter = activity_staff_counter + 1 where activity_id =".$activityId."";
		$result_alter = mysqli_query($db_link,$query_alter);
		if($result_alter)
		{
			echo "success";
		}else
		{
			echo "cacaAlter";
		}
	}
?>