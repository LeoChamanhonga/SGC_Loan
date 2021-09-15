<?php include "../config/session.php"; ?>  

<?php
if(isset($_POST['submit']))
{
$about = mysqli_real_escape_string($link, $_POST['about']);

$sql = mysqli_query($link, "UPDATE aboutus SET about = '$about'") or die(mysqli_error($link));
if(!$sql){
echo '<script>alert("Unable to Update Settings!...please try again later"); </script>';
echo '<script>window.location="aboutus.php?id='.$_SESSION['tid'].'"; </script>';
}
else{
echo '<script>alert("About Settings Update successfully!"); </script>';
echo '<script>window.location="aboutus.php?id='.$_SESSION['tid'].'"; </script>';
}
}
?>