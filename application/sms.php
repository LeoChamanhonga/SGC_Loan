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
        <i class="fa fa-gear"></i>&nbsp;SMS Settings
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> <a href="hiw.php?id=<?php echo $_SESSION['tid']; ?>">SMS</a></li>
        <li class="active">Settings</li>
      </ol>
	
<div class="alert alert-info">
          <p class="fa fa-hand-o-right">&nbsp;&nbsp;Update SMS Gateway Settings Here</p><br>
		  <p class="fa fa-hand-o-right">&nbsp;&nbsp;<strong><a href="https://sms.critechglobal.com" class="btn btn-success" target="_blank">Click here</a></strong> to Register with <b>CriTech::SMS</b> for the SMS SETTING DETAILS
		  <?php 
$call = mysqli_query($link, "SELECT * FROM sms");
if(mysqli_num_rows($call) == 0)
{
echo "<script>alert('Data Not Found!'); </script>";
}
else
{
while($row = mysqli_fetch_assoc($call)){
$status = $row['status'];
if($status == "NotActivated")
{
?>
<p align="left"><strong>Status:&nbsp;</strong><span class="label label-danger"><?php echo $row['status']; ?></span></p>
<?php 
}
elseif($status == "Activated")
{
?>
<p align="left"><strong>Status:&nbsp;</strong><span class="label label-success"><?php echo $row['status']; ?></span></p>
<?php
}
}
}
?>
		  </p>
        </div>
    </section>
	
    <section class="content">
		<?php include("include/sms_data.php"); ?>
	</section>
</div>			

<?php include("include/footer.php"); ?>