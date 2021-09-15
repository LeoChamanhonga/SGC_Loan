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
if(isset($_POST['send']))
{
$tid = $_SESSION['tid'];
$to =  mysqli_real_escape_string($link, $_POST['to']);
$subject = mysqli_real_escape_string($link, $_POST['subject']);
$message = mysqli_real_escape_string($link, $_POST['message']);

$insert = mysqli_query($link, "INSERT INTO message VALUES('','$tid','$name','$to','$subject','$message',NOW())") or die (mysqli_error($link));
if(!$insert)
{
 echo '<meta http-equiv="refresh" content="2;url=newmessage.php?tid='.$_SESSION['tid'].'&&mid='.base64_encode("409").'">';
echo '<br>';
echo'<span class="itext" style="color: #FF0000">Unable to deliver message.....Please try again later!</span>';
}
else{
echo '<meta http-equiv="refresh" content="2;url=outboxmessage.php?tid='.$_SESSION['tid'].'&&mid='.base64_encode("409").'">';
echo '<br>';
echo'<span class="itext" style="color: #FF0000">Sending Message, Please Wait</span>';
}
}
?>
</div>
</body>
</html>
