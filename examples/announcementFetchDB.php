<?php
	header('Content-Type: application/json');
	if(isset($_POST["info"]))
	{
		include("connectionDB.php");
		$query_activities = "Select * from `activity_info` where 1;";
		$result = mysqli_query($db_link,$query_activities);
		if($result)
		{
			$jsonvar = array();
			while($row_col = mysqli_fetch_array($result))
			{
				$array["activityid"] = $row_col["activity_id"];
				$array["activityname"]=$row_col["activity_name"];
				array_push($jsonvar, $array);
			}
				$jsonstring = json_encode($jsonvar);
				echo $jsonstring;
		}
	}
	if(isset($_POST["id"]))
	{
		include("connectionDB.php");
		$id = $_POST["id"];
		$query = "Select * from activity_info where activity_id=".$id.";"; 
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
	if（isset($_POST["an"])）
	{
		$var = $_POST["an"];
		//$var[0] -> activityid
		//$var[1] -> anouns
	}
?>