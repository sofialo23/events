
<?php
include ('conn.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$query = "SELECT * FROM activity_info ORDER BY activity_created_date ASC";

		$result = mysqli_query($db_link, $query); 

		echo "<table border='1'>";
		echo "<tr> <td> Name </td> <td> Department </td> <td>Date </td> </tr>";
		while ($row = mysqli_fetch_array( $result)) { 
			$name = $row['activity_name'];
			$actDept = $row['activity_host_depto'];
			$actDate = $row['activity_created_date'];
			echo "<tr> <td> {$row['activity_name']} </td> <td> {$row['activity_host_depto']} </td> <td>{$row['activity_created_date']} </td> </tr>";
			
		}

		echo "</table>";



	?> 
</body>
</html>

