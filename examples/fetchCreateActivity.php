<?php

	
  if(isset($_POST["alldate"]))
  {
    //I WILL RECEIVE THE ARRAY FROM THE CREATEACTIVITY.PHP OF THE CATEGORIES
    //WILL SEND IT INTO A STORED PROCEDURE SO I GET AUTOMATICALLY THE ID OF THE DATA INSERTED IN 
    //ACTIVITY_INFO AND WILL BE ABLE TO INSERT IT INTO THE CATEGORY_ACTIVITY TABLE
    include("connectionDB.php");
    $alldate = $_POST["alldate"];
    $finalTime = $alldate[2] + " " + $alldate[3] ;

      $query_insert_activity = "Insert into activity_info(activity_name, 
        activity_host_depto, activity_date, activity_info, 
        activity_staff_limit,activity_staff_counter,activity_creator, 
        activity_place) VALUES('".$alldate[0]."',".$alldate[1].",'".$alldate[7]."','".$alldate[6]."','".$alldate[5]."',0, '".$alldate[8]."','".$alldate[4]."');";

    $result_query_insert = mysqli_query($db_link,$query_insert_activity);
    if($result_query_insert)
    {
      echo "Success";
    }
  }
  if(isset($_POST["info"]))
  {
    include("connectionDB.php");
    $query_departments = "Select * from departments;";
    $result_query_departments = mysqli_query($db_link,$query_departments);
    if($result_query_departments)
    {
      $jsonvar = array();
      while($row_col = mysqli_fetch_array($result_query_departments))
      {
        $array["iddepartment"] = $row_col["id_department"];
        $array["namedepartment"]=$row_col["name_department"];
        $array["idcollege"] = $row_col["id_college"];
        array_push($jsonvar, $array);
      }
        $jsonstring = json_encode($jsonvar);
        echo $jsonstring;
    }
  }
  if(isset($_POST["categories"]))
  {
    include("connectionDB.php");
    $query_categories = "Select * from categories;";
    $result_categories = mysqli_query($db_link,$query_categories);
    if($result_categories)
    {
      $jsonvar = array();
      while($row_col = mysqli_fetch_array($result_categories))
      {
        $array["idcategory"] = $row_col["id_category"];
        $array["namecategory"]=$row_col["name_category"];
        array_push($jsonvar, $array);
      }
        $jsonstring = json_encode($jsonvar);
        echo $jsonstring;
    }
  }

?>