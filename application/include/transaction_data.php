<div class="row">
		
	       
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
			 <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
	 <button type="submit" class="btn btn-flat btn-danger" name="delete"><i class="fa fa-times"></i>&nbsp;Multiple Delete</button>
	<a href="deposit.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("410"); ?>"><button type="button" class="btn btn-flat btn-success"><i class="fa fa-plus"></i>&nbsp;Make Deposit</button></a>
	<a href="withdraw.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("410"); ?>"><button type="button" class="btn btn-flat btn-success"><i class="fa fa-plus"></i>&nbsp;Withdraw Money</button></a>
	<a href="send_smsloan.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("406"); ?>"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-envelope"></i>&nbsp;Send SMS</button></a>

	<a href="printtransaction.php" target="_blank" class="btn btn-primary btn-flat"><i class="fa fa-print"></i>&nbsp;Print</a>
	<a href="transactionexcel.php" target="_blank" class="btn btn-success btn-flat"><i class="fa fa-send"></i>&nbsp;Export Excel</a>
	<a href="pdftransaction.php" target="_blank" class="btn btn-info btn-flat"><i class="fa fa-file-pdf-o"></i>&nbsp;Export PDF</a>
	
	<hr>		
			  
			 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><input type="checkbox" id="select_all"/></th>
                  <th>TxID</th>
				  <th>T_Type</th>
				  <th>AcctNo.</th>
                  <th>FName</th>
				  <th>LName</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Amount</th>
				  <th>Date/Time</th>
                  <th>Actions</th>
                 </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT * FROM transaction") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
$txid = $row['txid'];
$t_type = $row['t_type'];
$acctno = $row['acctno'];
$ln = $row['ln'];
$fn = $row['fn'];
$em = $row['email'];
$ph = $row['phone'];
$amt = $row['amount'];
$dt = $row['date_time'];
?>    
                <tr>
				<td><input id="optionsCheckbox" class="checkbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
				<td><?php echo $row ['txid'];?></td>
				<td><?php echo $row ['t_type'];?></td>
                <td><?php echo $acctno; ?></td>
				<td><?php echo $fn; ?></td>
				<td><?php echo $ln; ?></td>
				<td><?php echo $em; ?></td>
                <td><?php echo $ph; ?></td>
<?php
$query = mysqli_query($link, "SELECT * FROM systemset");
$get_query = mysqli_fetch_array($query);
?>
				<td><?php echo $get_query['currency'].number_format($amt,2,'.',','); ?></td>
				<td><?php echo $dt; ?></td>
				<td align="center"><a href="#myModal <?php echo $id; ?>"> <button type="button" class="btn btn-primary btn-flat" data-target="#myModal<?php echo $id; ?>" data-toggle="modal"><i class="fa fa-print"></i> Receipt</button></a></td>
				</tr>
<?php } } ?>
             </tbody>
                </table>  
<?php
						if(isset($_POST['delete'])){
						$idm = $_GET['id'];
							$id=$_POST['selector'];
							$N = count($id);
						if($id == ''){
						echo "<script>alert('Row Not Selected!!!'); </script>";	
						echo "<script>window.location='listborrowers.php?id=".$_SESSION['tid']."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM borrowers WHERE id ='$id[$i]'");
								echo "<script>alert('Row Delete Successfully!!!'); </script>";
								echo "<script>window.location='listborrowers.php?id=".$_SESSION['tid']."'; </script>";
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
            <div class="alert alert-info" align="center" class="style2" style="color: #FFFFFF">NUMBER OF TRANSACTION:&nbsp;
			<?php 
			$call3 = mysqli_query($link, "SELECT * FROM transaction ");
			$num3 = mysqli_num_rows($call3);
			?>
			<?php echo $num3; ?> 
			
			</div>
			
			 <div id="chartdiv2"></div>								
			</div>
			</div>
			
</div>