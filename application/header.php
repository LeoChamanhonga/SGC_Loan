<?php include "../config/session.php"; ?>  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php 
$call = mysqli_query($link, "SELECT * FROM systemset");
if(mysqli_num_rows($call) == 0)
{
echo "<script>alert('Data Not Found!'); </script>";
}
else
{
while($row = mysqli_fetch_assoc($call)){
?>

<link href="../img/<?php echo $row['image']; ?>" rel="icon" type="dist/img">
<?php }}?>
  <?php 
	$call = mysqli_query($link, "SELECT * FROM systemset");
	$row = mysqli_fetch_assoc($call);
	?>
  <title><?php echo $row ['title']?></title>
   <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="../dist/css/style.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="../dist/js/calendar.js"></script>
    <strong> <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css"></strong>

<script type="text/javascript">
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>


<style>
#chartdiv {
	width		: 100%;
	height		: 400px;
	font-size	: 11px;
}					
.style2 {font-size: 24px}
</style>



<script>
var chart = AmCharts.makeChart( "chartdiv", {
  "type": "serial",
  "theme": "light",
  "dataProvider": [ {
  			
    "country": "Approved Status",
    "visits": <?php 
			$call1 = mysqli_query($link, "SELECT * FROM loan_info WHERE status = 'Approved'");
			$num1 = mysqli_num_rows($call1);
			?>
			<?php echo $num1; ?>

  }, {
  
    "country": "Disapproved Status",
    "visits": <?php 
			$call2 = mysqli_query($link, "SELECT * FROM loan_info WHERE status = 'Disapproved'");
			$num2 = mysqli_num_rows($call2);
			?>
			<?php echo $num2; ?>
  }, {
  
    "country": "Pending Status",
    "visits": <?php 
			$call3 = mysqli_query($link, "SELECT * FROM loan_info WHERE status = 'Pending'");
			$num3 = mysqli_num_rows($call3);
			?>
			<?php echo $num3; ?>
  }, {
  
    "country": "Completed",
    "visits": <?php 
			$call4 = mysqli_query($link, "SELECT * FROM loan_info WHERE upstatus = 'Completed'");
			$num4 = mysqli_num_rows($call4);
			?>
			<?php echo $num4; ?>
  }, {
  
    "country": "Pending ",
    "visits": <?php 
			$call5 = mysqli_query($link, "SELECT * FROM loan_info WHERE upstatus = 'Pending'");
			$num5 = mysqli_num_rows($call5);
			?>
			<?php echo $num5; ?>
  }, {
   
    "country": "Borrower",
    "visits": <?php 
			$call6 = mysqli_query($link, "SELECT * FROM loan_info");
			$num6 = mysqli_num_rows($call6);
			?>
			<?php echo $num6;?>
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }

} );
</script>

<style>
#chartdiv1 {
	width		: 100%;
	height		: 350px;
	font-size	: 11px;
}							
</style>

<!-- Chart code -->
<script>
var chart1 = AmCharts.makeChart( "chartdiv1", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "Loan Received",
    "value": 
	<?php
	$add=mysqli_query($link,'SELECT SUM(loan) from payments');
  	while($row1= mysqli_fetch_array($add))
  	{
    $mark=$row1['SUM(loan)'];
 	?>
				
	<?php echo $mark; ?>
	<?php }?>

  }, {
    "title": "Loan Returns",
    "value": 
<?php
	$add=mysqli_query($link,'SELECT SUM(amount_to_pay) from payments');
  	while($row2= mysqli_fetch_array($add))
  	{
    $mark2=$row2['SUM(amount_to_pay)'];
 	?>
				
	<?php echo $mark2; ?>
	<?php }?>
  } ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius": 5,

  "radius": "42%",
  "innerRadius": "60%",
  "labelText": "[[title]]",
  "export": {
    "enabled": true
  }
} );
</script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	
$(".customer").change(function()
{
var dataString = 'id='+ $(this).val();
$.ajax
({
type: "POST",
url: "ajax_cusact.php",
data: dataString,
cache: false,
success: function(html)
{
$(".account").html(html);
} 
});

});

$('.account').change(function(){									   
var dataString = 'id='+ $(this).val();
$.ajax
({
type: "POST",
url: "ajax_loan.php",
data: dataString,
cache: false,
success: function(html)
{
$(".loan").html(html);
} 
});

});



});
</script>
</head>
<body class="hold-transition skin-blue sidebar-mini">