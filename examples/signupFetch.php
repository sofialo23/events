<?php
		if(isset($_POST["col"]))
	{
		//VARIABLE FOR THE COLLEGE DB CONSULTA.
		include("conn.php");
		$query_col = " SELECT * FROM  `departments` WHERE id_college=".$_POST["col"].";";
		
		$result_col = mysqli_query($db_link,$query_col);
		if($result_col)
		{
			$data_col = array();
			while( ($row_col = mysqli_fetch_array($result_col)) )
			{
				$array_col["iddepartment"] = $row_col["id_department"];
				$array_col["namedepartment"] = $row_col["name_department"];
				$array_col["idcollege"] = $row_col["id_college"];
				array_push($data_col, $array_col);
			}
			echo json_encode($data_col);
		}
	}

?>
