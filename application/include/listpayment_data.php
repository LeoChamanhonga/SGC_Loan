<div class="row">
    
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
			 <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
	 <button type="submit" class="btn btn-flat btn-danger" name="delete"><i class="fa fa-times"></i>&nbsp;Delete</button>
	<a href="newpayments.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("408"); ?>"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-dollar"></i>&nbsp;New Payment</button></a>
	
	<a href="printpayment.php" target="_blank" class="btn btn-primary btn-flat"><i class="fa fa-print"></i>&nbsp;Print Payments</a>
	<a href="excelpayment.php" target="_blank" class="btn btn-success btn-flat"><i class="fa fa-send"></i>&nbsp;Export Excel</a>
	
	<hr>		
			  
			 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><input type="checkbox" id="select_all"/></th>
                  <th>ID</th>
                  <th>Customer</th>
				  <th>Loan</th>
                  <th>Balance</th>
				  <th>Amount to Pay</th>
                  <th>Date</th>
				  <th>Teller</th>
                  <th>Actions</th>
                 </tr>
                </thead>
                <tbody>
<?php
$tid = $_SESSION['tid'];
$select = mysqli_query($link, "SELECT * FROM payments WHERE tid = '$tid'") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
$customer = $row['customer'];
$getin = mysqli_query($link, "SELECT fname, lname, account FROM borrowers WHERE id = '$customer'") or die (mysqli_error($link));
$have = mysqli_fetch_array($getin);
$nameit = $have['fname'].'&nbsp;'.$have['lname'];
//$accte = $have['account'];
$loan = $row['loan'];
$amount_to_pay = $row['amount_to_pay'];
$pay_date = $row['pay_date'];
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$balance = $loan - $amount_to_pay;
$currency = $row1['currency']; 
?>    
                <tr>
                <td><input id="optionsCheckbox" class="checkbox" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
                <td><?php echo $id; ?></td>
				<td><?php echo $nameit; ?></td>
				<td><?php echo 'Flexible('.$currency.number_format($loan,2,".",",").')'; ?></td>
                <td><?php echo $currency.number_format($balance,2,".",","); ?></td>
				<td><?php echo $currency.number_format($amount_to_pay,2,".",","); ?></td>
				<td><?php echo $pay_date; ?></td>
				<td><?php echo $name; ?></td>
                <td><a href="view_pmt.php?id=<?php echo $id;?>"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-eye"></i>&nbsp;View</button></a></td>		    
			    </tr>
<?php } } } ?>
             </tbody>
                </table>  
			
<?php
						if(isset($_POST['delete'])){
						$idm = $_GET['id'];
							$id=$_POST['selector'];
							$N = count($id);
						if($id == ''){
						echo "<script>alert('Row Not Selected!!!'); </script>";	
						echo "<script>window.location='listpayment.php?id=".$_SESSION['tid']."&&mid=".base64_encode("408")."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM payments WHERE id ='$id[$i]'");
								echo "<script>alert('Row Delete Successfully!!!'); </script>";
								echo "<script>window.location='listpayment.php?id=".$_SESSION['tid']."&&mid=".base64_encode("408")."'; </script>";
							}
							}
							}
?>			
				
</form>
                </div>

				</div>	
				</div>
			
</div>	
			
			<div class="box box-info">
            <div class="box-body">
            <div class="alert alert-info" align="center" class="style2" style="color: #FFFFFF">NUMBER OF LOAN APPLICANTS:&nbsp;
			<?php 
			$call3 = mysqli_query($link, "SELECT * FROM payments ");
			$num3 = mysqli_num_rows($call3);
			?>
			<?php echo $num3; ?> 
			
			</div>
			
			 <div id="chartdiv1"></div>								
			</div>
			</div>		
       
</div>