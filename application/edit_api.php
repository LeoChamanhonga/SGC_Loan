<?php include "../config/session.php"; ?>  

<?php
if(isset($_POST['submit']))
{
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$status = mysqli_real_escape_string($link, $_POST['status']);

$sql = mysqli_query($link, "UPDATE sms SET username = '$username', password = '$password', status = '$status'") or die(mysqli_error($link));
if(!$sql){
echo '<script>alert("Unable to Update SMS Settings!...please try again later"); </script>';
echo '<script>window.location="sms.php?id='.$_SESSION['tid'].'"; </script>';
}
else{
echo '<script>alert("SMS Settings Update successfully!"); </script>';
echo '<script>window.location="sms.php?id='.$_SESSION['tid'].'"; </script>';
}
}
?>