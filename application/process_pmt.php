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
$id = $_GET['id'];
$acte =  mysqli_real_escape_string($link, $_POST['acte']);
$account_no = mysqli_real_escape_string($link, $_POST['account']);
$customer = mysqli_real_escape_string($link, $_POST['customer']);
$loan = mysqli_real_escape_string($link, $_POST['loan']);
$pay_date = mysqli_real_escape_string($link, $_POST['pay_date']);
$amount_to_pay = mysqli_real_escape_string($link, $_POST['amount_to_pay']);
$remarks = mysqli_real_escape_string($link, $_POST['remarks']);


$update = mysqli_query($link,"UPDATE payments SET account='$acte',account_no='$account_no',customer='$customer',loan='$loan',pay_date='$pay_date',amount_to_pay='$amount_to_pay',remarks='$remarks' WHERE id ='$id'")or die(mysqli_error()); 
if(!$update)
{
echo '<meta http-equiv="refresh" content="2;url=view_pmt.php?tid='.$id.'">';
echo '<br>';
echo'<span class="itext" style="color: #FF0000">Unable to update payment records!</span>';
}
else{
echo '<meta http-equiv="refresh" content="2;url=view_pmt.php?id='.$id.'">';
echo '<br>';
echo'<span class="itext" style="color: #FF0000">Updating Payment.....Please Wait!</span>';
}
?>
</div>
</body>
</html>