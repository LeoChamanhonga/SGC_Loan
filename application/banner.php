<?php include("include/header.php"); ?>
<?php
if(isset($_POST['upload']))
{
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name = addslashes($_FILES['image']['name']);
$image_size = getimagesize($_FILES['image']['tmp_name']);

if($image_name == "")
{
echo '<script>alert("Please you have to upload Image!..."); </script>';
echo '<script>window.location="banner.php?id='.$_SESSION['tid'].'"; </script>';
}
else{
//
move_uploaded_file($_FILES["image"]["tmp_name"], "bannar/".$_FILES["image"]["name"]);

$location = "bannar/".$_FILES['image']['name'];

$insert = mysqli_query($link, "INSERT INTO banner(banaid,bannar) VALUES('','$location')") or die (mysqli_error($link));
if(!$insert)
{
echo "<script>alert('Unable to Insert Banner......Please try again later!!!');</script>";
echo "<script>window.location='banner.php?tid=".$_SESSION['tid']."'; </script>";
}
else{
echo "<script>alert('Banner Added Succefully!!!');</script>";
echo "<script>window.location='banner.php?tid=".$_SESSION['tid']."'; </script>";
}
}
}
?>
<div class="wrapper">

<?php include("include/top_bar.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php include("include/side_bar.php"); ?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-gear"></i>&nbsp;Banner Setup
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> <a href="listborrowers.php?id=<?php echo $_SESSION['tid']; ?>">Setup</a></li>
        <li class="active">Update</li>
      </ol>
    </section>
	
	
    <section class="content">
		<?php include("include/banner_data.php"); ?>
	</section>
</div>	

<?php include("modal/banner_modal.php"); ?>

<?php include("include/footer.php"); ?>