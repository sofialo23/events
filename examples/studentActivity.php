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
            <a class="navbar-brand" href="#pablo">Activity Details</a>
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
          <div class="col-md-8" style="text-align:center;display: inline-block;margin:0 auto;">
            <div class="card" style="text-align:center;display: inline-block;margin:0 auto;">
              
              <div class="row">
                
                <div class="col-md-4 pr-1" style="float:left;" >
                  <div class="form-group">
                    <div class="panel panel-default" style="text-aling:left;"> 
                      <div class="panel-body"><button id="btn_back" type="button" style="background-color:#F1EBF1;color:#4B4A4B;" class="btn btn-light" ><-Go back!</button></div>

                    </div>
                  </div>
                </div>  
              

                <div class="card-header">
                  <h5 class="title">Activiy Information</h5>
                </div>
              </div>

              <div class="card-body" >
                <form id="frm_createactivity" style="display: block; margin-left: auto; margin-right: auto;">

                  <div class="row">
                    <div class="col-md-6 pr-3">
                      <div class="form-group">
                        <div class="panel panel-default"> 
                          <div class="panel-heading" style="background-color:#f1f1f1;border-radius: 25px; text-align: center;">
                            <h5 class="panel-title">Activity Name</h5>
                          </div>
                          <div class="panel-body"><h6 id="lbl_activityName"></h6></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 px-3">
                      <div class="form-group">
                        <div class="panel panel-default"> 
                          <div class="panel-heading" style="background-color:#f1f1f1;border-radius: 25px; text-align: center;">
                            <h5 class="panel-title">Host Department</h5>
                          </div>
                          <div class="panel-body"><h6 id="lbl_hostDepartment"></h6></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-3">
                      <div class="form-group">
                        <div class="panel panel-default"> 
                          <div class="panel-heading" style="background-color:#f1f1f1;border-radius: 25px; text-align: center;">
                            <h5 class="panel-title">Activity Date</h5>
                          </div>
                          <div class="panel-body"><h6 id="lbl_activityDate"></h6></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 px-3">
                      <div class="form-group">
                        <div class="panel panel-default"> 
                          <div class="panel-heading" style="background-color:#f1f1f1;border-radius: 25px; text-align: center;">
                            <h5 class="panel-title">Activity Time</h5>
                          </div>
                          <div class="panel-body"><h6 id="lbl_activityTime"></h6></div>
                        </div>
                      </div>
                    </div>
                  </div>
                    
                  <div class="row">
                    <div class="col-md-12 pr-3">
                      <div class="form-group">
                        <div class="panel panel-default"> 
                          <div class="panel-heading" style="background-color:#f1f1f1;border-radius: 25px; text-align: center;">
                            <h5 class="panel-title">Activity Place</h5>
                          </div>
                          <div class="panel-body" ><h6 id="lbl_activityPlace"></h6></div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-6 pr-3">
                      <div class="form-group">
                        <div class="panel panel-default"> 
                          <div class="panel-heading" style="background-color:#f1f1f1;border-radius: 25px; text-align: center;">
                            <h5 class="panel-title">Staff Required</h5>
                          </div>
                          <div class="panel-body"><h6 id="lbl_activityStaffLimit"></h6></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 px-3">
                      <div class="form-group">
                        <div class="panel panel-default"> 
                          <div class="panel-heading" style="background-color:#f1f1f1;border-radius: 25px; text-align: center;">
                            <h5 class="panel-title">Staff counter</h5>
                          </div>
                          <div class="panel-body"><h6 id="lbl_activityStaffCounter"></h6></div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-12 pr-3">
                      <div class="form-group">
                        <div class="panel panel-default"> 
                          <div class="panel-heading" style="background-color:#f1f1f1;border-radius: 25px; text-align: center;">
                            <h5 class="panel-title">Activity Information</h5>
                          </div>
                          <div class="panel-body"><h6 id="lbl_activityInformation"></h6></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- <div class="row " >
                    <div class="col-md-12">
                      <button type="button" id="btn_submit" class="btn btn-primary btn-lg btn-block">Cancel, Go back to all my activities</button>
                    </div>
                  </div> -->

                  <div class="row" style="float:right;padding-right:10px; text-aling:left;" >
                    <div class="col-md-6 pr-2">
                      <div class="form-group">
                        <div class="panel panel-default" style="text-aling:left;"> 
                          <div class="panel-body"><button id="btn_attend" type="button" class="btn btn-info btn-lg" style="width:150px;font-size:15px;text-aling:left;padding-top:25px;padding-bottom:25px;">Attend</button></div>

                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 px-2">
                      <div class="form-group">
                        <div class="panel panel-default"> 
                          
                          <div class="panel-body"><button id="btn_join" type="button" class="btn btn-warning btn-lg" style="width:150px;font-size:15px;">+ Join Staff!</button></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
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
<script >
    $(document).ready(function(){
        $('#txt_date').datepicker();
        $('.clockpicker').clockpicker();
        $("#btn_save").hide();
        var datas=[]; 
        datas[0]= "410321166";
        datas[1] = 3;
        // datas[1] -> Id of the activity
        // datas[0] -> ID del student para insert into notif_atst
        //NEED TO DISABLE ALL THE INPUTS HERE 

        //Going to look for this activity_creator 'first' and activity_id=8
        //And load up the info into the inputs
     
        
        $.ajax({
          url:'fetchStudentActivityDB.php',
          dataType: 'json',
          method: 'POST',
          data: {datas,datas},
          success: function(data){
            departments();
            $.each(data,function(index,element){
              // alert(element.activityhostdepto);
              $("#lbl_activityName").text(element.activityname);
              $("#lbl_hostDepartment").text(element.activityhostdepto);
              var completedate = element.activitydate;
              if(typeof completedate != 'undefined')
              {
                var fecha = (completedate).substr(0,10);
                var time = (completedate).substr(11,13);

                $("#lbl_activityDate").text(fecha);
                $("#lbl_activityTime").text(time);
              }

              $("#lbl_activityStaffLimit").text(element.activitystafflimit);
              $("#lbl_activityStaffCounter").text(element.activitystaffcounter);

              $("#lbl_activityInformation").text(element.activityinfo);
              $("#lbl_activityPlace").text(element.activityplace);

              if(element.activitystafflimit == element.activitystaffcounter)
              {
                  $("#btn_join").attr('disabled','disabled');
              }
              atst();
              
            });
          }
        });

        $("#btn_back").on('click',function(e){
            window.location.href = "allactivities.php";

        });
        $("#btn_join").on('click',function(e)
        {
            saveIntoDB(1);

        });
        $("#btn_attend").on('click',function(e)
        {
            saveIntoDB(0);

        });
        function saveIntoDB(rod)
        {
            var go = [];
            go[0] = datas[0];
            go[1] = datas[1];
            go[2] = rod;
            $.ajax({
              type:'POST',
              url:'fetchStudentActivityDB.php',
              dataType:'text',
              data: {go,go},
              success:function(data)
              {
                if(data=="success")

                {
                  if(rod==1)
                  {
                    alert("You have joined this activity succesfully!");
                  }else if(rod == 0)
                  {
                    alert("Congrats! We looking forward to have you with us little piece of shit!");
                  }
                }
                  
                  atst();
              }
            });
        }
        
        //Function to check if the user (student)
        //is already attending or staff y desabilitar los 
        //botones no matter which one he chosed.
      function atst()
      {
        // datas[0] -> ID del student para insert into notif_atst
        var chck = [];
        chck[0] = datas[0];
        chck[1] = datas[1];
        var flag = false;
        $.ajax({
          type:'POST',
          url:'fetchStudentActivityDB.php',
          dataType:'text',
          data: {chck,chck},
          success:function(data)
          {
              if(data=="success")//means it is in the DB already
              {
                $("#btn_join").attr('disabled','disabled');
                $("#btn_attend").attr('disabled','disabled');
              }
          }
        });
      }

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
      // $("#btn_submit").on('click',function(e){
      //     window.location.href = "allmyactivities.php";

      // });
      //This event is to save the data updated
      // $("#btn_save").on('click', function(e){
      //   var allinfo = [];
      //     //add a function to check if all the inputs are filled.
      //     var chckbx = $("#staff_input").val();
          
      //     if($("#defaultChecked2").is(":checked"))
      //     {
      //       chckbx = $("#staff_input").val();
      //     }
      //     var fecha = $('#txt_date').datepicker('getDate');
      //     var year = fecha.getFullYear();
      //     var month = fecha.getMonth()+1;
      //     if(month < 10)
      //     {
      //       month = "0"+month;
      //     }
      //     var day= fecha.getDate();
      //     allinfo[0] = $('#txt_activityname').val();
      //     allinfo[1] = $('#slct_departments').val();
      //     allinfo[2] = year+"-"+month+"-"+day;
      //     allinfo[3] = $('#txt_time').val() + ":00";
      //     allinfo[4] = $('#txt_activityplace').val();
      //     allinfo[5] = chckbx;
      //     allinfo[6] = $('#txt_activityinformation').val();
      //     allinfo[7] = year+"-"+month+"-"+day + " " + allinfo[3];
      //     allinfo[8] = datas[0];
      //     allinfo[9] = datas[1];
      //     e.preventDefault();
      //     $.ajax({
      //       method:'POST',
      //       dataType:"text",
      //       url: 'fetchActivityInfoDB.php',
      //       data: {allinfo,allinfo},
      //       success:function(data){
      //         if(data == "success")
      //         {
      //           alert("Changes applied succesfully");
      //           backLoading();
      //           loadAll();
      //         }
      //       }
      //     });
      // });
        /*
       $("#frm_createactivity").on('submit',function(e){
          window.location.href = "allactivities.php";
        });*/
        //Event for the 'updating activity' Checkbox
        // $('#defaultUnchecked').click(function(){

        //   if($(this).is(":checked"))
        //   {
        //     $("#btn_submit").hide();
        //     $("#btn_save").css('display','block');
        //     $("#txt_activityname").removeAttr('disabled');
        //     $("#slct_departments").removeAttr('disabled');
        //     $("#txt_date").removeAttr('disabled');
        //     $("#txt_time").removeAttr('disabled');
        //     $("#defaultChecked2").removeAttr(
        //       'disabled');
        //     $("#txt_activityplace").removeAttr('disabled');
        //     $("#txt_activityinformation").removeAttr('disabled');
        //     if($("#staff_input").val() > "0")
        //     {
        //         $("#staff_input").removeAttr('disabled');
        //     }
        //     //$("#staff_input").removeAttr('disabled');
        //   }else if($(this).is(":not(:checked)") == true)
        //   {
        //     $("#btn_submit").show();
        //     $("#btn_save").hide();
        //     //$("#staff_input").attr('disabled', 'disabled');
        //     $("#txt_activityname").attr('disabled','disabled');
        //     $("#slct_departments").attr('disabled','disabled');
        //     $("#txt_date").attr('disabled','disabled');
        //     $("#txt_time").attr('disabled','disabled');
        //     $("#txt_activityplace").attr('disabled','disabled');
        //     $("#txt_activityinformation").attr('disabled','disabled');
        //     $("#defaultChecked2").attr('disabled','disabled');
        //     $("#staff_input").attr('disabled','disabled');
        //   }
        // });
        // function backLoading()
        // {
        //     $("#btn_submit").show();
        //     $("#btn_save").hide();
        //     //$("#staff_input").attr('disabled', 'disabled');
        //     $("#txt_activityname").attr('disabled','disabled');
        //     $("#slct_departments").attr('disabled','disabled');
        //     $("#txt_date").attr('disabled','disabled');
        //     $("#txt_time").attr('disabled','disabled');
        //     $("#txt_activityplace").attr('disabled','disabled');
        //     $("#txt_activityinformation").attr('disabled','disabled');
        //     $("#defaultChecked2").attr('disabled','disabled');
        //     $("#staff_input").attr('disabled','disabled');
        // }


        //Event on the Checkbox to change the staff textBox disabled value.
        // $('#defaultChecked2').click(function(){

        //   if($(this).is(":checked"))
        //   {
            
        //     $("#staff_input").removeAttr('disabled');
        //   }else if($(this).is(":not(:checked)") == true)
        //   {
        //     $("#staff_input").attr('disabled', 'disabled');
        //   }
        // });


    });
      
</script>
</html>
