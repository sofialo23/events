<?php
include ('conn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
   <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script src="jquery-ui.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <!-- END OF ALL THE SCRIPTS AND LINKS ORIGINALLY AT THE END OF THIS-->
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Activities Organizer
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  
  <script type="text/javascript" src="clockpicker.js"></script>
  <link href="clockpicker.css" rel="stylesheet">
  
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  
  <!-- NEW  -->
  <!-- NEW  -->
  <!-- NEW  -->
  <!-- NEW  -->
  <!-- Latest compiled and minified CSS -->

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          SA
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Organizer APP
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="./dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li >
            <a href="./allactivities.php">
              <i class="now-ui-icons education_atom"></i>
              <p>All Activities</p>
            </a>
          </li>
          <li  >
            <a href="./allmyactivities.php">
              <i class="now-ui-icons education_atom"></i>
              <p>My Activities</p>
            </a>
          </li>


          <?php 

            if($_SESSION["rol"] == 1)
            {
                echo "
                  <li>
                    <a href='./createActivity.php'>
                      <i class='now-ui-icons location_map-big'></i>
                      <p>Create Activity</p>
                    </a>
                  </li>
                  <li class='active' >
                    <a href='./createAnouns.php'>
                      <i class='now-ui-icons ui-1_bell-53'></i>
                      <p>Create Announcements</p>
                    </a>
                  </li>
                  <li>
                    <a href='./notifications.php'>
                      <i class='now-ui-icons users_single-02'></i>
                      <p>Message to Admin</p>
                    </a>
                  </li>
                ";

            }

          ?>
          <li >
            <a href="./announcement.php">
              <i class="now-ui-icons education_atom"></i>
              <p>Announcements</p>
            </a>
          </li>

          <li>
            <a href="">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Sign out</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">New Announcement</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="row">

                 <div class="col-md-4 pr-1" style="float:left;" >
                  <div class="form-group">
                    <div class="panel panel-default" style="text-aling:left;"> 
                      <div class="panel-body"><button id="btn_back" type="button" style="background-color:#F1EBF1;color:#4B4A4B;" class="btn btn-light" ><-Go back!</button></div>

                    </div>
                  </div>
                </div>   

                <div class="card-header">
                  <h4 class="card-title">Announcement</h4>
                  <h7 >(General notification)</h7>
                </div>

              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                  
                <?php 
                  $notifid = $_GET['notifid'];
                  $activityid = $_GET['activity'];

                  $query = "SELECT activity_info.activity_name, activity_notif.activity_notif_msg, activity_notif.activity_notif_id, activity_notif.activity_notif_date_created, activity_notif.activity_notif_activity_id FROM activity_notif inner join activity_info on activity_info.activity_id=activity_notif.activity_notif_activity_id where activity_notif.activity_notif_id=$notifid";
                  $result = mysqli_query($db_link, $query); 

                  if ($row = mysqli_fetch_array( $result)) { 
                        

                        echo " <table class='table'>";

                        
                        echo "<tr> <td class= 'text-primary'> Activity Name </td> <td >" . $row['activity_name'] . " </td><td></td> </tr>";
                        echo "<tr> <td class= 'text-primary'> Announcement </td> <td style='text-align:justify;'>" . $row['activity_notif_msg']. "</td> <td></td></tr>";
                        
                        // echo "<tr>";
                        // echo "<td><a href= 'activityInfo.php?eventid=$id' id=".$row['activity_id']." class= 'btn btn-primary btn-lg btn-block'>Modify this Activity</a></td> </td><td></td><td></td></tr>";
                  }
                     ?>
                  
                  </table>
                </div>
                <!-- <form id="frm_createanouns">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Activity (Choose one)</label>
                        <select id="slct_activities" class="form-control"  data-live-search="true" required>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Announcement Content</label>
                        <textarea rows="4" id="txt_anouns_content" cols="80" class="form-control" placeholder="Here can be your Announcement Info" value="" required></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row" >
                    <button type="submit" id="btn_submit" class="btn btn-primary btn-lg btn-block">Post Announce</button>
                  </div>
                </form> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
                <div class="card-header">
                  <h5 class="title">Activity Information</h5>
                </div>
                <div class="row">
                  <div class="col-md-5 pr-1">
                    <div class="form-group">
                      <label>Activity Name</label>
                      <input type="text" class="form-control" id="txt_activityname"  placeholder="Company" required disabled>
                    </div>
                  </div>
                  <div class="col-md-5 px-1">
                    <div class="form-group">
                      <label>Host Department</label>
                      <input type="text" class="form-control" placeholder="Department Name" id="txt_hostdepartment" value="" required disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Date</label>
                        <input type="text" class="form-control" placeholder="Date (Click on)" id="txt_date" value="" required disabled>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Time</label>
                        <div class="input-grou clockpicker">
                          <input type="text" id="txt_time" class="form-control" placeholder="Time" value="" required disabled>
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Activity Place</label>
                        <input type="text" class="form-control" id="txt_activityplace" placeholder="Activity Place" value="" required disabled>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 px-1">
                    <div class="form-group">
                      <label>Staff Number</label>
                      <input type="text" id="staff_input" size=3 class="form-control"  placeholder="Staff Number: 0" value="0" disabled>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-10">
                      <div class="form-group">
                        <label>Activity Information</label>
                        <textarea rows="4" cols="60" class="form-control" id="txt_activityinformation" placeholder="Here can be your description" value="" required disabled></textarea>
                      </div>
                    </div>
                  </div>

              <!-- <div class="card-body">

              </div> -->
              <hr>
              <!-- <div class="button-container">
                
              </div> -->
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                  <a href="https://www.creative-tim.com">
                  SA ORGANIZER APP
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">SA Dev</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">SA</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>
<script>
  $(document).ready(function(){
    // select: id="slct_activities"
    // txtArea: id="txt_anouns_content"
    var info = "all";
    var slct = $("#slct_activities");

    var activityNotifId = getQueryVariable("notifid");
    var activityId = getQueryVariable("activity");
    var elId = activityId;
    function getQueryVariable(variable)
    {
           var query = window.location.search.substring(1);
           var vars = query.split("&");
           for (var i=0;i<vars.length;i++) {
                   var pair = vars[i].split("=");
                   if(pair[0] == variable){return pair[1];}
           }
           return(false);
    }

    //Filling in the select HTML element
      $.ajax({
        type:'POST',
        url:'fetchStudentActivityDB.php',
        dataType:'json',
        data: {elId,elId},
        success:function(data)
        {
          $.each(data,function(index,element){
            //Fill in all the Labels into the info Card on the right
            // $("#lbl_activityname").append(element.activityname);
            $("#txt_activityname").val(element.activityname);
            $("#txt_hostdepartment").val(element.activityhostdepto);
            var ddd = element.activityname;
            var completedate = element.activitydate;
            if(typeof completedate != 'undefined')
            {
              var fecha = (completedate).substr(0,10);
              var time = (completedate).substr(11,16);
              $("#txt_date").val(fecha);
              $("#txt_time").val(time);
            }
            $("#staff_input").val(element.activitystafflimit);
            $("#txt_activityplace").val(element.activityplace);
            $("#txt_activityinformation").val(element.activityinfo);
          });
        }
      });
      $("#btn_back").on('click',function(e){
            window.location.href = "announcement.php";

        });
    //Finish Filling in slc_activities

    //Event to submit the notification to the DB

    // $("#frm_createanouns").on('submit',function(e){
    //   var anss = [];
    //   anss[0] = $("#slct_activities").val();
    //   anss[1] = $("#txt_anouns_content").val();
    //   anss[2] = "first"; //user that will be replaced by the user in sesion
    //   e.preventDefault();
    //   $.ajax({
    //     method:'POST',
    //     dataType: 'text',
    //     url:'announcementFetchDB.php',
    //     data: {anss,anss},
    //     success:function(data){
    //       //alert("Announcement successfully posted!");
    //       //window.location.href = "allevents.php";  
    //       if(data=="success")
    //       {
    //         alert("Announcement successfully posted!");
    //         window.location.href = "allevents.php";  
    //       }else if(data=="failure")
    //       {
    //         alert("Failiure!");
    //       }
          
    //     }
    //   });
    // });

    //Finishes event to submit the notification to the DB
    //When It chooses any activity in order to display all the info on the right

    // $("#slct_activities").change(function(){
    //   var id = $("#slct_activities").val();
    //   if(id == "0")
    //   {
    //     $("#txt_activityname").val('');
    //     $("#txt_hostdepartment").val('0');
    //     $("#txt_date").val('');
    //     $("#txt_time").val('');
    //     $("#staff_input").val('');
    //     $("#txt_activityplace").val('');
    //     $("#txt_activityinformation").val('');
    //   }else
    //   {
    //     $.ajax({
    //       url:'announcementFetchDB.php',
    //       dataType: 'json',
    //       method:'POST',
    //       data:{id,id},
    //       success: function(data)
    //       {
    //         $.each(data,function(index,element){
    //           //Fill in all the Labels into the info Card on the right
    //           // $("#lbl_activityname").append(element.activityname);
    //           $("#txt_activityname").val(element.activityname);
    //           $("#txt_hostdepartment").val(element.activityhostdepto);
    //           var ddd = element.activityname;
    //           var completedate = element.activitydate;
    //           if(typeof completedate != 'undefined')
    //           {
    //             var fecha = (completedate).substr(0,10);
    //             var time = (completedate).substr(11,16);
    //             $("#txt_date").val(fecha);
    //             $("#txt_time").val(time);
    //           }
    //           $("#staff_input").val(element.activitystafflimit);
    //           $("#txt_activityplace").val(element.activityplace);
    //           $("#txt_activityinformation").val(element.activityinfo);
    //         });
              
    //       }
    //     });
    //   }
    // });


  });
</script>
</html>