<?php include "../config/session.php"; ?>  

<?php
if(isset($_POST['submit']))
{
$hiw = mysqli_real_escape_string($link, $_POST['hiw']);

$sql = mysqli_query($link, "UPDATE hiw SET hiw = '$hiw'") or die(mysqli_error($link));
if(!$sql){
echo '<script>alert("Unable to Update Settings!...please try again later"); </script>';
echo '<script>window.location="hiw.php?id='.$_SESSION['tid'].'"; </script>';
}
else{
echo '<script>alert("HIW Settings Update successfully!"); </script>';
echo '<script>window.location="hiw.php?id='.$_SESSION['tid'].'"; </script>';
}
}
?>