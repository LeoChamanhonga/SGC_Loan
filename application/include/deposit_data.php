<div class="box">
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> Customer Deposit Form</h3>
            </div>
             <div class="box-body">
            
			 <form class="form-horizontal" method="post" enctype="multipart/form-data">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Account Number</label>
                  <div class="col-sm-10">
				<select name="account"  class="form-control select2" required>
					<option selected>Select Customer Account</option>
<?php
$search = mysqli_query($link, "SELECT * FROM borrowers");
while($get_search = mysqli_fetch_array($search))
{
?>
					<option value="<?php echo $get_search['account']; ?>"><?php echo $get_search['account']; ?>&nbsp; [<?php echo $get_search['fname']; ?>&nbsp;<?php echo $get_search['lname']; ?>]</option>
<?php } ?>
				</select>
				</div>
            </div>
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Amount to Deposit</label>
                  <div class="col-sm-10">
                  <input name="amount" type="number" class="form-control" placeholder="Enter Amount Here" required>
                  </div>
                  </div>

			 </div>
			 
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Deposit</i></button>

              </div>
			  </div>
<?php
if(isset($_POST['save']))
{
	try{
		$account =  mysqli_real_escape_string($link, $_POST['account']);
		$amount = mysqli_real_escape_string($link, $_POST['amount']);
		$txid = 'TXID-'.rand(2000000,100000000);

		$google_details = mysqli_query($link, "SELECT * FROM borrowers WHERE account = '$account'");
		while($get_details = mysqli_fetch_array($google_details))
		{
			$fn = $get_details['fname'];
			$ln = $get_details['lname'];
			$em = $get_details['email'];
			$ph = $get_details['phone'];
			$bal = $get_details['balance'];
			$total = number_format($amount + $bal,2,'.','');
			if($amount < 0){
				throw new UnexpectedValueException();
			}
			else{
			$update = mysqli_query($link, "UPDATE borrowers SET balance = '$total' WHERE account = '$account'") or die (mysqli_error($link));
			$insert = mysqli_query($link, "INSERT INTO transaction VALUES('','$txid','Deposit','$account','$fn','$ln','$em','$ph','$amount',NOW())") or die (mysqli_error($link));
			if(!($update && $insert))
			{
			echo "<div class='alert alert-info'>Unable to Process Transaction.....Please try again later</div>";
			}
			else{
				$sql_alert = mysqli_query($link, "SELECT * FROM sms") or die (mysqli_error($link));
				$find_alert = mysqli_fetch_array($sql_alert);
				$status = $find_alert['status'];
				if($status == "NotActivated")
				{
					echo "";
				}
				else{
				include("alert_sender/deposit_alert.php");
				}
				echo "<div class='alert alert-success'>Amount Deposited Successfully!</div>";
				}
			}
		}
	}catch(UnexpectedValueException $ex)
	{
		echo "<div class='alert alert-danger'>Invalid Amount Entered!</div>";
	}
}
?>			  
			 </form> 


</div>	
</div>	
</div>
</div>