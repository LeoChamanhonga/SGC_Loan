<?php include "../config/session.php"; ?>  
<?php
if(isset($_POST['transfer']))
{
$tid = $_SESSION['tid'];
$amount =  mysqli_real_escape_string($link, $_POST['amount']);
$desc = mysqli_real_escape_string($link, $_POST['desc']);
$wtype = "transfer";
$transfer_to = mysqli_real_escape_string($link, $_POST['transfer_to']);

$slec = mysqli_query($link, "SELECT * FROM twallet WHERE tid = '$tid'") or die (mysqli_error($link));
while($have = mysqli_fetch_array($slec))
{
$Total = $have['Total'];
$Balance = $Total - $amount;
$update1 = mysqli_query($link, "UPDATE twallet SET Total = '$Balance' WHERE tid = '$tid'") or die (mysqli_error($link));
$insert = mysqli_query($link, "INSERT INTO mywallet VALUES('','$transfer_to','$amount','$desc','$wtype',NOW())") or die (mysqli_error($link));
if(!($update1 && $insert))
{
echo "<script>alert('Fund Not Transfer.....Please try again later!'); </script>";
echo "<script>window.location='mywallet.php?tid=".$_SESSION['tid']."'; </script>";
}
else{
echo "<script>alert('Fund Transfered Successfully!'); </script>";
echo "<script>window.location='mywallet.php?tid=".$_SESSION['tid']."'; </script>";
}
}
}
?>