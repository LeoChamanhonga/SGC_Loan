<div class="box">
	
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-gear"></i> SMS Settings</h3>
            </div>
             <div class="box-body">
 
              
			<?php
$se = mysqli_query($link, "SELECT * FROM sms") or die (mysqli_error($link));
while($sel = mysqli_fetch_array($se))
{
$api_name = $sel['sms_gateway'];
$username = $sel['username'];
$password = $sel['password'];
$api = $sel['api'];
$status = $sel['status'];
?>
 <form action="edit_api.php" method="post" enctype="multipart/form-data">
 <div class="form-group">
 <label for="inputName" class="col-sm-2 control-label">API Name:</label>
 <div class="col-sm-10">
<input type="text" class="form-control" id="inputName" value="<?php echo $api_name; ?>" name="title" readonly>
 </div>
 </div><hr>
 <div class="form-group">
 <label for="inputName" class="col-sm-2 control-label">Username:</label>
 <div class="col-sm-10">
<input type="text" class="form-control" id="inputName" placeholder="Enter your Username" value="<?php echo $username; ?>" name="username" required>
 </div>
 </div><hr>
 <div class="form-group">
 <label for="inputName" class="col-sm-2 control-label">Password:</label>
 <div class="col-sm-10">
<input type="text" class="form-control" id="inputName" placeholder="Enter your password" value="<?php echo $password; ?>" name="password" required>
 </div>
 </div><hr>
 <div class="form-group">
 <label for="inputName" class="col-sm-2 control-label">API:</label>
 <div class="col-sm-10">
<input type="text" class="form-control" id="inputName" value="<?php echo $api; ?>" name="api" readonly>
 </div>
 </div><hr>
 <div class="form-group">
 <label for="inputName" class="col-sm-2 control-label">Status:</label>
 <div class="col-sm-10">
 <select name="status" class="form-control" id="inputName">
 <option class="form-control" selected="selected">NotActivated</option>
 <option class="form-control">Activated</option>
 </select>
 </div>
 </div>
 <div class="form-group">
 <div class="col-sm-offset-2 col-sm-10">
<br> <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp;Update Settings</button><br><br>
 </div>
 </div><br><br>
 </form>
 <?php
}
?>

			</div>	
			</div>
			</div>	
			</div>