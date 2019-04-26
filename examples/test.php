
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>
<body>

<input type="text" name="daterange" value="07/01/2019 - 07/15/2019" />

</body>
</html>




<script>
   $(document).ready(function(){

  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    document.write("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    
  });
});
</script>