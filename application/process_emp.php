<?php include "../config/session.php"; ?>  

<!DOCTYPE html>
<html>
<head>

<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-right: 16px solid green;
  border-bottom: 16px solid red;
  border-left: 16px solid pink;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
  margin:auto;
  
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>
<br><br><br><br><br><br><br><br><br>
<div style="width:100%;text-align:center;vertical-align:bottom">
		<div class="loader"></div>
<?php
if(isset($_POST['emp']))
{
$name =  mysqli_real_escape_string($link, $_POST['name']);
$email =  mysqli_real_escape_string($link, $_POST['email']);
$phone =  mysqli_real_escape_string($link, $_POST['phone']);
$addr1 =  mysqli_real_escape_string($link, $_POST['addr1']);
$addr2 =  mysqli_real_escape_string($link, $_POST['addr2']);
$city =  mysqli_real_escape_string($link, $_POST['city']);
$state =  mysqli_real_escape_string($link, $_POST['state']);
$zip =  mysqli_real_escape_string($link, $_POST['zip']);
$country =  mysqli_real_escape_string($link, $_POST['country']);
$comment =  mysqli_real_escape_string($link, $_POST['comment']);
$username =  mysqli_real_escape_string($link, $_POST['username']);
$password =  mysqli_real_escape_string($link, $_POST['password']);
$cpaswword =  mysqli_real_escape_string($link, $_POST['cpassword']);
$role =  "admin";

$target_dir = "../img/";
$target_file = $target_dir.basename($_FILES["image"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$check = getimagesize($_FILES["image"]["tmp_name"]);

$encrypt = base64_encode($password);
$id = "Loan"."=".rand(10000000,340000000);

if($password != $cpaswword)
{
echo "<script>alert('The 2 Password does not match!'); </script>";
}
elseif($check == false)
{
	echo '<meta http-equiv="refresh" content="2;url=view_emp.php?tid='.$id.'&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Invalid file type</span>';
}
elseif(file_exists($target_file)) 
{
	echo '<meta http-equiv="refresh" content="2;url=view_emp.php?tid='.$id.'&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Already exists.</span>';
}
elseif($_FILES["image"]["size"] > 500000)
{
	echo '<meta http-equiv="refresh" content="2;url=view_emp.php?tid='.$id.'&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Image must not more than 500KB!</span>';
}
elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
{
	echo '<meta http-equiv="refresh" content="2;url=view_emp.php?tid='.$id.'&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Sorry, only JPG, JPEG, PNG & GIF Files are allowed.</span>';
}
else{
	$sourcepath = $_FILES["image"]["tmp_name"];
	$targetpath = "../img/" . $_FILES["image"]["name"];
	move_uploaded_file($sourcepath,$targetpath);
	
	$location = "img/".$_FILES['image']['name'];
	
	$insert = mysqli_query($link, "INSERT INTO user VALUES('','$name','$email','$phone','$addr1','$addr2','$city','$state','$zip','$country','$comment','$username','$encrypt','$id','$location','$role')") or die (mysqli_error($link));
	if(!$insert)
	{
	echo '<meta http-equiv="refresh" content="2;url=newemployee.php?tid='.$_SESSION['tid'].'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Unable to register employee!</span>';
	}
	else{
	echo '<meta http-equiv="refresh" content="2;url=listemployee.php?tid='.$_SESSION['tid'].'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Saving Employee.....Please Wait!</span>';
	}
}
}
?>
</div>
</body>
</html>