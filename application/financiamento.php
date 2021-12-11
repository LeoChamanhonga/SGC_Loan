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
        Financiamento por Area
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> <a href="financiamento.php?id=<?php echo $_SESSION['tid']; ?>">Financiamento</a></li>
        <li class="active">Lista</li>
      </ol>
    </section>
    <section class="content">
		<?php include("include/financiamento_data.php"); ?>
	</section>
</div>	

<?php include("include/footer.php"); ?>