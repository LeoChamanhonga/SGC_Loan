<div class="row">
		       
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
			 <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Internal Message'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pdelete = $get_check['pdelete'];
$pread = $get_check['pread'];
$pcreate = $get_check['pcreate'];
$pupdate = $get_check['pupdate'];
?>
	<?php echo ($pdelete == '1') ? '<button type="submit" class="btn btn-flat btn-danger" name="delete"><i class="fa fa-times"></i>&nbsp;Multiple Delete</button>' : ''; ?>
	<?php echo ($pread == '1') ? '<a href="outboxmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-envelope"></i>&nbsp;Outbox Message</button></a>' : ''; ?>
	<?php echo ($pcreate == '1') ? '<a href="newmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'"><button type="button" class="btn btn-flat btn-success"><i class="fa fa-envelope"></i>&nbsp;New Message</button></a>' : ''; ?>
	<hr>		
			  
			 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><input type="checkbox" id="select_all"/></th>
                  <th>Subject</th>
                  <th>Sender Name</th>
				  <th>Date</th>
                  <th>Actions</th>
                 </tr>
                </thead>
                <tbody> 
<?php
$tid = $_SESSION['tid'];
$select = mysqli_query($link, "SELECT * FROM message WHERE msg_to = '$tid'") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
$subject = $row['subject'];
$sender_name = $row['sender_name'];
$date = $row['date_time'];
?>   
                <tr>
				<td><input id="optionsCheckbox" class="checkbox" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
                <td><?php echo $subject; ?></td>
				<td><?php echo $sender_name; ?></td>
				<td><?php echo $date; ?></td>
                <td><?php echo ($pupdate == '1') ? '<a href="view_msg.php?id='.$id.'&&mid='.base64_encode("406").'"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-eye"></i>&nbsp;View</button></a>' : ''; ?></td>
						    
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
						echo "<script>window.location='inboxmessage.php?id=".$_SESSION['tid']."&&mid=".base64_encode("406")."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM message WHERE id ='$id[$i]'");
								echo "<script>alert('Row Delete Successfully!!!'); </script>";
								echo "<script>window.location='inboxmessage.php?id=".$_SESSION['tid']."&&mid=".base64_encode("406")."'; </script>";
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