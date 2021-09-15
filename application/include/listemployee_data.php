<div class="row">       
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
			 <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
	 <button type="submit" class="btn btn-flat btn-danger" name="delete"><i class="fa fa-times"></i>&nbsp;Delete</button>
	<a href="newemployee.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("409"); ?>"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-user"></i>&nbsp;New Employee</button></a>
	<a href="send_sms.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-envelope-o"></i>&nbsp;Send SMS</button></a>
	
	<a href="printemp.php" target="_blank" class="btn btn-primary btn-flat"><i class="fa fa-print"></i>&nbsp;Print Reports</a>
	<a href="excelemp.php" target="_blank" class="btn btn-success btn-flat"><i class="fa fa-send"></i>&nbsp;Export Excel</a>
	
	
	<hr>		
			  
			 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><input type="checkbox" id="select_all"/></th>
                  <th>ID</th>
                  <th>Image</th>
				  <th>Name</th>
                  <th>Username</th>
				  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Actions</th>
                 </tr>
                </thead>
                <tbody>
<?php
$tid = $_SESSION['tid'];
$select = mysqli_query($link, "SELECT * FROM user") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['userid'];
$name = $row['name'];
$image = $row['image'];
$username = $row['username'];
$email = $row['email']; 
$phone = $row['phone']; 
?>    
                <tr>
                <td><input id="optionsCheckbox" class="checkbox" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
                <td><?php echo $id; ?></td>
				<td><img src="../<?php echo $image; ?>" width="40" height="40"></td>
				<td><?php echo $name; ?></td>
				<td><?php echo $username; ?></td>				
				<td><?php echo $email; ?></td>
				<td><?php echo $phone; ?></td>
				<td><a href="view_emp.php?id=<?php echo $id;?>&&mid=<?php echo base64_encode("409"); ?>"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-eye"></i>&nbsp;View</button></a></td>
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
						echo "<script>window.location='listemployee.php?id=".$_SESSION['tid']."&&mid=".base64_encode("409")."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM user WHERE userid ='$id[$i]'");
								echo "<script>alert('Row Delete Successfully!!!'); </script>";
								echo "<script>window.location='listemployee.php?id=".$_SESSION['tid']."&&mid=".base64_encode("409")."'; </script>";
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