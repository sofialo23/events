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
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
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
          <li class="active ">
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
            <a class="navbar-brand" href="#pablo">Create Activity</a>
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
                <h5 class="title">Create Activity</h5>
              </div>
              <div class="card-body">
                <form id="frm_createactivity">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Activity Name</label>
                        <input type="text" class="form-control" id="txt_activityname"  placeholder="Company" >
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Host Department</label>
                        <input type="text" class="form-control" placeholder="Department Name" id="txt_hostdepartment" value="">
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
                        <input type="text" class="form-control" placeholder="Date (Click on)" id="txt_date" value="" >
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Time</label>
                        <div class="input-grou clockpicker">
                          <input type="text" id="txt_time" class="form-control" placeholder="Time" value="00:00">
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
                        <input type="text" class="form-control" id="txt_activityplace" placeholder="Activity Place" value="">
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
                        <input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
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
                        <input type="text" id="staff_input" size=3 class="form-control" id="txt_staffnumber" placeholder="Staff Number: 0" value="" disabled>
                      </div>
                    </div>
                    <!--
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Postal Code</label>
                        <input type="number" class="form-control" placeholder="ZIP Code">
                      </div>
                    </div>
                  -->
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Activity Information</label>
                        <textarea rows="4" cols="80" class="form-control" id="txt_activityinformation" placeholder="Here can be your description" value=""></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row" >
                    <button type="submit" id="btn_submit" class="btn btn-primary btn-lg btn-block">Create Activity</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
              <!-- 
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                    <h5 class="title">Mike Andrew</h5>
                  </a>
                  <p class="description">
                    michael24
                  </p>
                </div>
                <p class="description text-center">
                  "Lamborghini Mercy
                  <br> Your chick she so thirsty
                  <br> I'm in that two seat Lambo"
                </p>
              </div>                    
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>          -->
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
        /*  
            CLOCK PICKER GETTING VALUE INTERNET RESOURCE
            var end = $('#end').clockpicker({
                afterHourSelect: function() {
                    var c = end.data();
                    $('#end').val(c.clockpicker.hours + ':00');
                }
            });
            methods FOR CLOCK PICKER 
            https://github.com/mlitwiniuk/clockpicker-seconds

            FORMAAA DOSSS
            $('.container').clockpicker().find('input').change(function(){
              $('#new').val(this.value);
            });

        */

        /*FIRST PART OF HOW TO GET THE DATA
          $("#datepicker").datepicker({
             onSelect: function(dateText, inst) { 
                var dateAsString = dateText; //the first parameter of this function
                var dateAsObject = $(this).datepicker( 'getDate' ); //the getDate method
             }
          });
          SECOND PART TO PUT IT INSIDE THE METHOD
          var jsDate = $('#your_datepicker_id').datepicker('getDate');
          if (jsDate !== null) { // if any date selected in datepicker
              jsDate instanceof Date; // -> true
              jsDate.getDate();
              jsDate.getMonth();
              jsDate.getFullYear();
          }
        */
        //Event on the Submit Button.

        $("#frm_createactivity").on('submit',function(e){
          var alldate = [];
          //add a function to check if all the inputs are filled.
          var chckbx = ($("#defaultChecked2").is(":checked"))?$("#txt_staffnumber").val() : "0";
          alldate[0] = $('#txt_activityname').val();
          alldate[1] = $('#txt_hostdepartment').val();
          alldate[2] = $('#txt_date').datepicker('getDate');
          alldate[3] = $('#txt_time').val();
          alldate[4] = $('#txt_activityplace').val();
          alldate[5] = chckbx;
          alldate[6] = $('#txt_activityinformation').val();
          e.preventDefault();

          $.ajax({
            method:'POST',
            url: 'fetchCreateActivity.php',
            data: {alldate,alldate},
            success:function(data){
                window.location.href = "succeedNewActivity.php";
              
            }
          });
        });

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