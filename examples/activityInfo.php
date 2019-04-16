<?php
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
            <a href="./dashboard.html">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./allactivities.html">
              <i class="now-ui-icons education_atom"></i>
              <p>All Activities</p>
            </a>
          </li>
          <li >
            <a href="./createActivity.html">
              <i class="now-ui-icons location_map-big"></i>
              <p>Create Activity</p>
            </a>
          </li>
          <li>
            <a href="./createAnouns.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Create Announcements</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons users_single-02"></i>
              <p>Message to Admin</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Sign out</p>
            </a>
          </li>
          <!--
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        -->
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
            <a class="navbar-brand" href="#pablo">Update Activity</a>
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
              <div class="card-header">
                <h5 class="title">Update Activity</h5>
              </div>
              <div class="card-body">
                <form id="frm_createactivity">
                  <div class="row">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Modify Activity</label>
                    </div>
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Activity Name</label>
                        <input type="text" class="form-control" id="txt_activityname"  placeholder="Company" required disabled>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Host Department</label>
                        <select id="slct_departments" class="form-control"  data-live-search="true" required disabled >
                        </select>
                        <!-- <input type="text" class="form-control" placeholder="Department Name" id="txt_hostdepartment" value="" required disabled> -->
                      </div>
                    </div>
                    <!--
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Activity Place</label>
                        <input type="text" class="form-control" placeholder="Place">
                      </div>
                    </div>    -->
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Date</label>
                        <input type="text" class="form-control" placeholder="Date (Click on)" id="txt_date" value="" required disabled>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
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
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <!-- Default checked -->
                        <!-- Default unchecked -->
                        <!-- Material unchecked -->
                        <!-- Default checked -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultChecked2" disabled>
                        <label class="custom-control-label" for="defaultChecked2">Staff Needed</label>
                      </div>
                        <!--
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="City" value="">
                        -->
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Staff Number</label>
                        <input type="text" id="staff_input" size=3 class="form-control"  placeholder="Staff Number: 0" value="0" disabled>
                        <a href="allmyactivities.php">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Activity Information</label>
                        <textarea rows="4" cols="80" class="form-control" id="txt_activityinformation" placeholder="Here can be your description" value="" required disabled></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row " >
                    <button type="button" id="btn_submit" class="btn btn-primary btn-lg btn-block">Cancel, Go back to all my activities</button>
                  </div>
                  <div class="row " >
                    <button type="button" class="btn btn-success" id="btn_save">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
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
<script >
    $(document).ready(function(){
        $('#txt_date').datepicker();
        $('.clockpicker').clockpicker();
        $("#btn_save").hide();
        var datas=[]; 
        datas[0]= "<?php echo $_SESSION['userID']; ?>";
        datas[1] = "<?php echo $_GET['eventid']; ?>";   //Coming from the button they click on allmyactivities.php

        //NEED TO DISABLE ALL THE INPUTS HERE 

        //Going to look for this activity_creator 'first' and activity_id=8
        //And load up the info into the inputs
     
        
        $.ajax({
          url:'fetchActivityInfoDB.php',
          dataType: 'json',
          method: 'POST',
          data: {datas,datas},
          success: function(data){
            departments();
            $.each(data,function(index,element){
              // alert(element.activityhostdepto);
              $("#txt_activityname").val(element.activityname);
              $("#slct_departments").val(element.activityhostid);
              var ddd = element.activityname;
              var completedate = element.activitydate;
              if(typeof completedate != 'undefined')
              {
                var fecha = (completedate).substr(0,10);
                var time = (completedate).substr(11,16);
                $("#txt_date").val(fecha);
                $("#txt_time").val(time);
              }
              if(element.activitystafflimit > 0)
              {
                $("#defaultChecked2").prop('checked',true);
                $("#staff_input").val(element.activitystafflimit);
              }
              $("#txt_activityplace").val(element.activityplace);
              $("#txt_activityinformation").val(element.activityinfo);
            });
          }
        });
      function departments()
      {
        var info = "all";
        $.ajax({
            type:'POST',
            url:'fetchCreateActivity.php',
            dataType:'json',
            data: {info,info},
            success:function(data){
                var toAppend_col = '<option value="0"> Select one department </option>';
                $("#slct_departments").append(toAppend_col);
                $.each(data,function(index,element){
                  var dd = '<option value="'+element.iddepartment+'">'+element.namedepartment+'</option>';
                  $("#slct_departments").append(dd);
                });
            }
          });
      }
      function loadAll()
      {

        $.ajax({
          url:'fetchActivityInfoDB.php',
          dataType: 'json',
          method: 'POST',
          data: {datas,datas},
          success: function(data){
            $.each(data,function(index,element){
              $("#txt_activityname").val(element.activityname);
              $("#slct_departments").val(element.activityhostdepto);
              var ddd = element.activityname;
              var completedate = element.activitydate;
              if(typeof completedate != 'undefined')
              {
                var fecha = (completedate).substr(0,10);
                var time = (completedate).substr(11,16);
                $("#txt_date").val(fecha);
                $("#txt_time").val(time);
              }
              if(element.activitystafflimit > 0)
              {
                $("#defaultChecked2").prop('checked',true);
                $("#staff_input").val(element.activitystafflimit);
              }
              $("#txt_activityplace").val(element.activityplace);
              $("#txt_activityinformation").val(element.activityinfo);
            });
          }
        });
      }
      //Calling initial function to load the info in the the inputs
      $("#btn_submit").on('click',function(e){
          window.location.href = "allmyactivities.php";

      });
      //This event is to save the data updated
      $("#btn_save").on('click', function(e){
        var allinfo = [];
          //add a function to check if all the inputs are filled.
          var chckbx = $("#staff_input").val();
          
          if($("#defaultChecked2").is(":checked"))
          {
            chckbx = $("#staff_input").val();
          }
          var fecha = $('#txt_date').datepicker('getDate');
          var year = fecha.getFullYear();
          var month = fecha.getMonth()+1;
          if(month < 10)
          {
            month = "0"+month;
          }
          var day= fecha.getDate();
          allinfo[0] = $('#txt_activityname').val();
          allinfo[1] = $('#slct_departments').val();
          allinfo[2] = year+"-"+month+"-"+day;
          allinfo[3] = $('#txt_time').val() + ":00";
          allinfo[4] = $('#txt_activityplace').val();
          allinfo[5] = chckbx;
          allinfo[6] = $('#txt_activityinformation').val();
          allinfo[7] = year+"-"+month+"-"+day + " " + allinfo[3];
          allinfo[8] = datas[0];
          allinfo[9] = datas[1];
          e.preventDefault();
          $.ajax({
            method:'POST',
            dataType:"text",
            url: 'fetchActivityInfoDB.php',
            data: {allinfo,allinfo},
            success:function(data){
              if(data == "success")
              {
                alert("Changes applied succesfully");
                backLoading();
                loadAll();
              }
            }
          });
      });
        /*
       $("#frm_createactivity").on('submit',function(e){
          window.location.href = "allactivities.php";
        });*/
        //Event for the 'updating activity' Checkbox
        $('#defaultUnchecked').click(function(){

          if($(this).is(":checked"))
          {
            $("#btn_submit").hide();
            $("#btn_save").css('display','block');
            $("#txt_activityname").removeAttr('disabled');
            $("#slct_departments").removeAttr('disabled');
            $("#txt_date").removeAttr('disabled');
            $("#txt_time").removeAttr('disabled');
            $("#defaultChecked2").removeAttr(
              'disabled');
            $("#txt_activityplace").removeAttr('disabled');
            $("#txt_activityinformation").removeAttr('disabled');
            if($("#staff_input").val() > "0")
            {
                $("#staff_input").removeAttr('disabled');
            }
            //$("#staff_input").removeAttr('disabled');
          }else if($(this).is(":not(:checked)") == true)
          {
            $("#btn_submit").show();
            $("#btn_save").hide();
            //$("#staff_input").attr('disabled', 'disabled');
            $("#txt_activityname").attr('disabled','disabled');
            $("#slct_departments").attr('disabled','disabled');
            $("#txt_date").attr('disabled','disabled');
            $("#txt_time").attr('disabled','disabled');
            $("#txt_activityplace").attr('disabled','disabled');
            $("#txt_activityinformation").attr('disabled','disabled');
            $("#defaultChecked2").attr('disabled','disabled');
            $("#staff_input").attr('disabled','disabled');
          }
        });
        function backLoading()
        {
            $("#btn_submit").show();
            $("#btn_save").hide();
            //$("#staff_input").attr('disabled', 'disabled');
            $("#txt_activityname").attr('disabled','disabled');
            $("#slct_departments").attr('disabled','disabled');
            $("#txt_date").attr('disabled','disabled');
            $("#txt_time").attr('disabled','disabled');
            $("#txt_activityplace").attr('disabled','disabled');
            $("#txt_activityinformation").attr('disabled','disabled');
            $("#defaultChecked2").attr('disabled','disabled');
            $("#staff_input").attr('disabled','disabled');
        }


        //Event on the Checkbox to change the staff textBox disabled value.
        $('#defaultChecked2').click(function(){

          if($(this).is(":checked"))
          {
            
            $("#staff_input").removeAttr('disabled');
          }else if($(this).is(":not(:checked)") == true)
          {
            $("#staff_input").attr('disabled', 'disabled');
          }
        });


    });
      
</script>
</html>
