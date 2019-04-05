<?php
	header('Content-Type: application/json');
	if(isset($_POST["data"]))
	{
		include("connectionDB.php");
		$data = $_POST["data"];
		$activity_creator = $data[0];
		$activity_id = $data[1];
		$query = "Select * from activity_info where activity_creator='".$activity_creator."' and activity_id=".$activity_id.";";
		$result = mysqli_query($db_link,$query);
		if($result)
		{
			$jsonvar = array();
			while($row_col = mysqli_fetch_array($result))
			{
				$array["activityid"] = $row_col["activity_id"];
				$array["activityname"]=$row_col["activity_name"];
				$array["activityhostdepto"] = $row_col["activity_host_deptop"];
				$array["activitycreateddate"] = $row_col["activity_created_date"];
				$array["activitydate"] = $row_col["activity_date"];
				$array["activityinfo"] = $row_col["activity_info"];
				$array["activitystafflimit"] = $row_col["activity_staff_limit"];
				$array["activitystaffcounter"] = $row_col["activity_staff_counter"];
				$array["activitycreator"] = $row_col["activity_creator"];
				$array["activityplace"] = $row_col["activity_place"];

				array_push($jsonvar, $array_col);
			}
				$jsonstring = json_encode($jsonvar);
				echo $jsonstring;
		}

	}
?>