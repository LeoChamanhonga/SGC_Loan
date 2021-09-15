<div class="row">
		
	       
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
			 <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
	 <button type="submit" class="btn btn-flat btn-danger" name="delete"><i class="fa fa-times"></i>&nbsp;Multiple Delete</button>
	<a href="inboxmessage.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-primary"><i class="fa fa-envelope"></i>&nbsp;Inbox Message</button></a>
	<a href="newmessage.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-success"><i class="fa fa-envelope"></i>&nbsp;New Message</button></a>
	<hr>		
			  
			 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><input type="checkbox" id="select_all"/></th>
                  <th>ID</th>
				  <th>Subject</th>
                  <th>Sender Name</th>
				  <th>Date</th>
                  <th>Actions</th>
                 </tr>
                </thead>
                <tbody> 
<?php
$tid = $_SESSION['tid'];
$select = mysqli_query($link, "SELECT * FROM message WHERE sender_id = '$tid'") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
$subject = $row['subject'];
$recipient_id = $row['msg_to'];
$date = $row['date_time'];
$select1 = mysqli_query($link, "SELECT name FROM user WHERE id = '$recipient_id'") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$recipient_name = $row1['name']; 
?>   
                <tr>
				<td><input class="checkbox" name="Checkbox[]" type="checkbox" value=""></td>
                <td><?php echo $id; ?></td>
                <td><?php echo $subject; ?></td>
				<td><?php echo $recipient_name; ?></td>
				<td><?php echo $date; ?></td>
                <td><a href="#d<?php echo $id;?>"><button data-target= "#d<?php echo $id; ?>" data-toggle="modal" type="button" class="btn btn-flat btn-danger"><i class="fa fa-trash"></i>&nbsp;Delete</button></a></td>
						    
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
						echo "<script>window.location='outboxmessage.php?id=".$_SESSION['tid']."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM message WHERE id ='$id[$i]'");
								echo "<script>alert('Row Delete Successfully!!!'); </script>";
								echo "<script>window.location='outboxmessage.php?id=".$_SESSION['tid']."'; </script>";
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