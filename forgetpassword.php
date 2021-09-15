<?php include "config/connect.php";?>
<!DOCTYPE html>
<html>
<head>

  
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
<title><?php echo $row ['title']?></title>
<?php }}?>  

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

<link href="img/<?php echo $row['image']; ?>" rel="icon" type="dist/img">
<?php }}?> 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition lockscreen">

<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
  <?php $sql = "SELECT * FROM systemset";
$result = mysqli_query($link,$sql);
  		
while ($row=mysqli_fetch_array($result))
		{
?>
    <a href="index.php"><div style="color: red;"><h3><strong><?php echo $row ['name'];?></strong></h3></div></a>
  </div>
  
  <!-- User name -->
  <div class="lockscreen-name">Recover password</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
		<img class="img-circle" src="img/<?php echo $row ['image'];?>" width="30" height="30">    </div>
			<?php }?>

    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" method="post" enctype="multipart/form-data">
      <div class="input-group">
        <input name="username" type="email" class="form-control" placeholder="Enter your email address here">

        <div class="input-group-btn">
          <button name="submit" type="submit" class="btn"><i class="fa fa-send text-muted"></i></button>
        </div>
      </div>

    </form>
	<?php							
if (isset($_POST['submit']))
{
// check for valid email address
$email = $_POST['username'];

// checks if the username is in use
$check = mysqli_query($link, "SELECT email FROM user WHERE email = '$email'")or die(mysqli_error($link));
if(mysqli_num_rows($check)==0)
{
echo "<div class='alert alert-danger'>Email Address does not exist in database</div>";
}
// if no errors then carry on
else{
$query = mysqli_query($link, "SELECT username FROM user WHERE email = '$email'") or die (mysqli_error($link));
$r = mysqli_fetch_object($query);

//create a new random password
$password = substr(base64_decode(uniqid(rand(),1)),3,10);
$pass = base64_encode($password); //encrypted version for database entry
$update = mysqli_query($link, "UPDATE user SET password = '$pass' WHERE email = '$email'") or die (mysqli_error($link));
//send email
$to = "$email";
$subject = "Account Details Recovery";
$body = "Hi $r->username,";
$body .= "\nYou have requested for your account details.";
$body .= "\nHere is your account information please keep this as you may need this at a later stage:";
$body .= "\n";
$body .= "\nYour username is: $r->username";
$body .= "\nYour password is: $password";
$body .= "\n";
$body .= "\nYour password has been reset please login and change your password to something more rememberable.";
$body .= "\n";
$body .= "\nRegards.";
$additionalheaders = "From: <critech.getresponse@gmail.com>rn";
$additionalheaders .= "Reply-To: critech.getresponse@gmail.com";

if(mail($to, $subject, $body, $additionalheaders))
{
echo "<hr>";
echo "<div class='alert alert-success'>Your Account Details/Password has been sent to your email now</script>";
}
else
{
echo "<hr>";
echo "<div class='alert alert-danger'>Failed to Recover your password, try again</script>";
}
}
}
?>			
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Enter your email to retrieve your password
  </div>
  <div class="text-center">
    <a href="index.php">Or sign in as a different user</a>
  </div>
  <div class="lockscreen-footer text-center">
    <?php 
				 $result= mysqli_query($link,"select * from systemset")or die(mysqli_error());
				 while($row=mysqli_fetch_array($result))
				 {
				 ?>
    <strong> <?php echo $row ['footer'];?> </strong>
	<?php }?>
  </div>
</div>
<!-- /.center -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5919eb424ac4446b24a6f355/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
