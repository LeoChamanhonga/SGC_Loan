<div class="row">     
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
	<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Employee Wallet'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pdelete = $get_check['pdelete'];
$pcreate = $get_check['pcreate'];
$pupdate = $get_check['pupdate'];
?>
	<?php echo ($pdelete == '1') ? '<button type="submit" class="btn btn-flat btn-danger" name="delete"><i class="fa fa-times"></i>&nbsp;Multiple Delete</button>' : ''; ?>
	<?php echo ($pupdate == '1') ? '<button data-target= "#c" data-toggle="modal" type="button" class="btn btn-flat btn-info"><i class="fa fa-dollar"></i>&nbsp;Transfer Money</button>' : ''; ?>
	<?php echo ($pcreate == '1') ? '<button data-target= "#b" data-toggle="modal" type="button" class="btn btn-flat btn-success"><i class="fa fa-plus"></i>&nbsp;Add New Wallet</button>' : ''; ?>
	<button type="button" class="btn btn-flat btn-info" disabled>&nbsp;Total Wallets:&nbsp;
<strong class="alert alert-success">
<?php
$tid = $_SESSION['tid'];
$select = mysqli_query($link, "SELECT Total FROM twallet WHERE tid = '$tid'") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "0.00";
}
else{
while($row = mysqli_fetch_array($select))
{
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];
echo $currency.number_format($row['Total'],2,".",",")."</b>";
}
}
}
?>
</strong>
	</button>

	<hr>		
			  
			 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><input type="checkbox" id="select_all"/></th>
                  <th>ID</th>
                  <th>Amount</th>
				  <th>descriptions</th>
                  <th>Wallet Type</th>
                  <th>Transaction Date</th>
                  <th>Actions</th>
                 </tr>
                </thead>
                <tbody> 
<?php
$tid = $_SESSION['tid'];
$select = mysqli_query($link, "SELECT * FROM mywallet WHERE tid = '$tid'") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
$amt = $row['Amount'];
$desc = $row['Desc'];
$wtype = $row['wtype'];
$tdate = $row['tdate'];
?>   
                <tr>
                <td><input id="optionsCheckbox" class="checkbox" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
                <td><?php echo $id; ?></td>
				<td><?php echo number_format($amt,2,'.',','); ?></td>
				<td><?php echo $desc; ?></td>
                <td><?php echo $wtype; ?></td>
				<td><?php echo $tdate; ?></td>
<?php
if($wtype == "transfer" || $wtype == "debit")
{
?>
				<td><?php echo ($pdelete == '1') ? '<a href="#d'.$id.'"><button data-target= "#d'.$id.'" data-toggle="modal" type="button" class="btn btn-flat btn-danger"><i class="fa fa-trash"></i>&nbsp;Delete</button></a>' : ''; ?></td>	
<?php
}
else{
?>
    			<td><?php echo ($pdelete == '1') ? '<button data-target= "#c" data-toggle="modal" type="button" class="btn btn-flat btn-danger" disabled="disabled"><i class="fa fa-trash"></i>&nbsp;Delete</button>' : ''; ?></td>
<?php } ?>
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
						echo "<script>window.location='mywallet.php?id=".$_SESSION['tid']."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM mywallet WHERE id ='$id[$i]'");
								echo "<script>alert('Row Delete Successfully!!!'); </script>";
								echo "<script>window.location='mywallet.php?id=".$_SESSION['tid']."'; </script>";
							}
							}
							}
?>			
</form>				

              </div>


	
</div>	
</div>
</div>	
</div>