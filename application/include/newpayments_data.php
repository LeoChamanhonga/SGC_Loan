<div class="box">
	      <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-dollar"></i> New Payment</h3>
            </div>
             <div class="box-body">

			 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="process_payment.php">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
				
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Account#</label>
                  <div class="col-sm-10">
                  <input name="acte" type="text" class="form-control" placeholder="Account" required>
                  </div>
                  </div>
				  
				   <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Customer</label>
				 <div class="col-sm-10">
                <select class="customer select2" name="customer" style="width: 100%;">
				<option selected="selected">--Select Customer--</option>
                 <?php
				$get = mysqli_query($link, "SELECT * FROM borrowers order by id") or die (mysqli_error($link));
				while($rows = mysqli_fetch_array($get))
				{
				echo '<option value="'.$rows['id'].'">'.$rows['fname'].'&nbsp;'.$rows['lname'].'</option>';
				}
				?>
                </select>
              </div>
			  </div>
				  
		 <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Customer Account#</label>
				 <div class="col-sm-10">
                <select class="account select2" name="account" style="width: 100%;">
				<option selected="selected">--Select Customer Account--</option>
                  <?php
				$getin = mysqli_query($link, "SELECT * FROM borrowers order by id") or die (mysqli_error($link));
				while($row = mysqli_fetch_array($getin))
				{
				echo '<option value="'.$row['id'].'">'.$row['account'].'</option>';
				}
				?>
                </select>
              </div>
			  </div>
			  
			  <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Loan</label>
				 <div class="col-sm-10">
                <select class="loan select2" name="loan" style="width: 100%;">
				<option selected="selected">--Select Loan--</option>
                 <?php
				$get = mysqli_query($link, "SELECT * FROM loan_info order by id") or die (mysqli_error($link));
				while($rows = mysqli_fetch_array($get))
				{
				echo '<option value="'.$rows['amount_topay'].'">'."Flexible(".$rows['amount']."-"."&nbsp;"."bal:".$rows['amount_topay'].")".'</option>';
				}
				?>
                </select>
              </div>
			  </div>
			  
			  <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Payment Date</label>
			 <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="pay_date">
                </div>
              </div>
			  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Amount to Pay</label>
                  <div class="col-sm-10">
                  <input name="amount_to_pay" type="number" class="form-control" placeholder="Amount to Pay" required>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Teller By</label>
                  <div class="col-sm-10">
                 <?php
$tid = $_SESSION['tid'];
$sele = mysqli_query($link, "SELECT * from user WHERE id = '$tid'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($sele))
{
?>
                  <input name="teller" type="text" class="form-control" value="<?php echo $row['name']; ?>" readonly>
<?php } ?>
                  </div>
                  </div>
				  
				  
		 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Remarks</label>
                  	<div class="col-sm-10">
					<textarea name="remarks"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
          </div>

			 </div>
			 
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Make Payment</i></button>

              </div>
			  </div>
			  </form>
			  

           
</div>	
</div>
</div>	
</div>