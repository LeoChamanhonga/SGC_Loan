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
	while($row = mysqli_fetch_assoc($call)){
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="application/index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><?php echo $row ['abb'];?></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><?php echo $row ['name'];?></span>
    </a>
	<?php }?>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		
		
		
		
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  
                 
                  
                  
                </ul>
              </li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            
            <ul class="dropdown-menu">
              
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    
                  </li>
                  <!-- end task item -->
                  
                  <!-- end task item -->
                  
                  <!-- end task item -->
                  
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#"></a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<?php 
			$id = $_SESSION['tid'];
			$call = mysqli_query($link, "SELECT * FROM user WHERE id = '$id'");
			if(mysqli_num_rows($call) == 0)
			{
			echo "<script>alert('Data Not Found!'); </script>";
			}
			else
			{
			while($row = mysqli_fetch_assoc($call))
			{
			?>
              <img src="../<?php echo $row['image'];?>" class="user-image" alt="User Image">

          <span class="hidden-xs"><?php echo $row ['name'] ;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../<?php echo $row['image'];?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo 'Username:'. $row ['username'];?>
                </p>
					<?php }}?>
                  </li>
			  
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
				 
                    <a href="profile.php?id=<?php echo $_SESSION['tid']; ?>">Profile</a>
					
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="listborrowers.php?id=<?php echo $_SESSION['tid']; ?>">Contacts</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="inboxmessage.php?id=<?php echo $_SESSION['tid']; ?>">Mailbox</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
 				<a href="inboxmessage.php?id=<?php echo $_SESSION['tid']; ?>" class="btn btn-info btn-flat">Message</a>                </div>
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-warning btn-flat"><i class="fa fa-sign-out"></i>Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
		<?php 
			$id = $_SESSION['tid'];
			$call = mysqli_query($link, "SELECT * FROM user WHERE id = '$id'");
			if(mysqli_num_rows($call) == 0)
			{
			echo "<script>alert('Data Not Found!'); </script>";
			}
			else
			{
			while($row = mysqli_fetch_assoc($call))
			{
			
			?>
          <img src="../<?php echo $row['image'];?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $row ['username'] ;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		  <?php }}?>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
	       <?php 
			$id = $_SESSION['tid'];
			$call = mysqli_query($link, "SELECT * FROM user WHERE id = '$id'");
			if(mysqli_num_rows($call) == 0)
			{
			echo "<script>alert('Data Not Found!'); </script>";
			}
			else
			{
			while($row = mysqli_fetch_assoc($call))
			{
			
			?>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
		<li><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dashboard"></i> <span>Dashbord</span></a></li>
		
		<li class="treeview ">
          <a href="#">
            <i class="fa fa-book"></i> <span>Email Templates</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
 			<li class="active"><a href="newemail.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i> New Email</a></li>
            <li><a href="listemail.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>List Email</a></li>
          </ul>
        </li>  
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Borrowers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
 			<li><a href="newborrowers.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i> New Borrowers</a></li>
            <li><a href="listborrowers.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>List Borrowers</a></li>
          </ul>
        </li>  
		
	<li><a href="mywallet.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-book"></i> <span>My Wallet</span></a></li>

		<li class="treeview">
          <a href="#">
            <i class="fa fa-dollar"></i> <span>Loans</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
 			<li class="active"><a href="newloans.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i> New Loans</a></li>
            <li><a href="listloans.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>List Loans</a></li>
          </ul>
        </li>  
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Message</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
 			<li class="active"><a href="newmessage.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i> New Message</a></li>
            <li><a href="inboxmessage.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>Inbox Message</a></li>
            <li><a href="outboxmessage.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>Outbox Message</a></li>
          </ul>
        </li>  
		
		<li><a href="missedpayment.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dollar"></i> <span>Missed Payment</span></a></li>		
				
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dollar"></i> <span>Payments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
 			<li class="active"><a href="newpayments.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i> New Payment</a></li>
            <li><a href="listpayment.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>List Payments</a></li>
          </ul>
        </li>  
		
		
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Employee</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
 			<li class="active"><a href="newemployee.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i> New Employee</a></li>
            <li><a href="listemployee.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>List Employee</a></li>
          </ul>
        </li>  
		
		<li><a href="savings.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-money"></i> <span>Savings Account</span></a></li>
		
		<li class="treeview active">
          <a href="#">
            <i class="fa fa-gear"></i> <span>General Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
		  	<li><a href="system_set.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>Company Setup</a></li>
			<li><a href="banner.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>Banner Settings</a></li>
			<li><a href="aboutus.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>Aboutus Settings</a></li>
			<li><a href="hiw.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>How System Works</a></li>
			<li class="active"><a href="faq.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>Faqs Settings</a></li>
			<li><a href="sms.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>SMS Gateway Settings</a></li>
			<li><a href="backupdatabase.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>Backup Database</a></li>
          </ul>
        </li>
		<li>
          <a href="../logout.php">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
		

    </section>
    <!-- /.sidebar -->
  </aside>
<?php }}?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-gear"></i>&nbsp;Faqs Setup
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> <a href="hiw.php?id=<?php echo $_SESSION['tid']; ?>">Faqs</a></li>
        <li class="active">Setup</li>
      </ol>
    </section>
	
	
    <section class="content">
	<div class="box">
	
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-gear"></i> Faqs Setup</h3>
            </div>
             <div class="box-body">
 
              
			  <?php
$se = mysqli_query($link, "SELECT * FROM faqs") or die (mysqli_error($link));
while($sel = mysqli_fetch_array($se))
{
$topic = $sel['topic'];
$content = $sel['content'];

?>
 <form action="edit_faqs.php" method="post" enctype="multipart/form-data">
 			 <div class="box-body">


 <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Topic</label>
 <div class="col-sm-10">
<input type="text" class="form-control" value="<?php echo $topic; ?>" name="topic" required>
 </div>
 </div>
 
 <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Content</label>
 <div class="col-sm-10">
 <textarea name="content" id="editor1" cols="100" rows="5" required><?php echo $content; ?></textarea>
 </div>
 </div>
 
<div align="right">
 <div class="box-footer">
<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp;Update</button>

 </div>
 </div>
 
 </div>

 </form>
<?php
}
?>
			
			</div>	
			</div>
			</section>	
			</div>	




  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.2
    </div>
	<?php $sql = "SELECT footer FROM systemset";
		$result = mysqli_query($link,$sql);
  		if(!$result)
  		{
		echo '
		<div class="alert alert-error">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Warning!</strong> Unable to select! check database con.
		</div>';
		}
		else
		{
while ($row=mysqli_fetch_array($result))
		{
?>
    <strong> <?php echo $row ['footer'];?>   </strong>
	<?php }}?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Bootstrap 3.3.6 -->
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
</body>
</html>

