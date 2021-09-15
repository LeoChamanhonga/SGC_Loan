<?php include("include/header.php"); ?>
<div class="wrapper">

<?php include("include/top_bar.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php include("include/side_bar.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-gear"></i>&nbsp;Company Setup
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> <a href="listborrowers.php?id=<?php echo $_SESSION['tid']; ?>">Setup</a></li>
        <li class="active">Update</li>
      </ol>
    </section>
	
	
    <section class="content">
		<?php include("include/system_set_data.php"); ?>
	</section>
</div>

<?php include("include/footer.php"); ?>