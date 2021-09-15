<div class="box">
        
	        <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-mail-reply-all"></i> New Email</h3>
            </div>
             <div class="box-body">
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
				 <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
              	<div class="box-body">
				
				<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Select Receiver</label>
                  <div class="col-sm-10">
					<select name="to"  class="form-control select2" required style="width:100%">
					<?php
					$tid = $_SESSION['tid'];
					$get = mysqli_query($link, "SELECT * FROM user WHERE id != '$tid'") or die (mysqli_error($link));
					while($rows = mysqli_fetch_array($get))
					{
					?>
					<option value="" selected="selected">Select Receiver Here</option>
					<option value="<?php echo $rows['email']; ?>"><?php echo $rows['name']; ?></option>
					<?php } ?>				
					</select>
				  </div>
				</div>	
				
				<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Subject: </label>
                  	<div class="col-sm-10">
					<input type="text" name="subject" class="form-control" placeholder="Enter Subject" /required>
           			 </div>
          			</div>
					
					
					<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Message</label>
                  	<div class="col-sm-10">
					<textarea id="editor1" name="msg"  class="form-control" rows="5" cols="80" placeholder="Enter Message Here"></textarea>
           			 </div>
          			</div>
					
				
				</div>
				
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="send" type="submit" class="btn btn-success btn-flat"><i class="fa fa-upload">&nbsp;Send</i></button>
              </div>
			  </div>
<?php							
if (isset($_POST['send']))
{
// check for valid email address
$tid = $_SESSION['tid'];
$email = $_POST['to'];
$subj = $_POST['subject'];
$msg = $_POST['msg'];

$query = mysqli_query($link, "SELECT email FROM systemset") or die (mysqli_error($link));
$r = mysqli_fetch_object($query);
//send email
$to = "$email";
$subject = "$subj";
$body = "$msg";
$additionalheaders = "From: <$r->email>rn";
$additionalheaders .= "Reply-To: noreply@critechglobal.com";

if(mail($to, $subject, $body, $additionalheaders))
{
	$insert = mysqli_query($link, "INSERT INTO etemplates VALUES('','$tid','$email','$subj','$msg',NOW())") or die (mysqli_error($link));
	echo "<hr>";
	echo "<div class='alert alert-success'>Mail Sent Successfully!!</script>";
}
else
{
	echo "<hr>";
	echo "<div class='alert alert-danger'>Failed to Send Email, try again later!!</script>";
}
}
?>	

<?php
if(isset($_POST['addpurchase']))
{
$tid = $_SESSION['tid'];
$select = mysqli_query($link, "SELECT * FROM user WHERE id = '$tid'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
$created_by = $row['name'];
$tname =  mysqli_real_escape_string($link, $_POST['tname']);
$template = mysqli_real_escape_string($link, $_POST['template']);
$desc = mysqli_real_escape_string($link, $_POST['desc']);

$insert = mysqli_query($link, "INSERT INTO etemplates VALUES('','$tname','$template','$desc','$created_by')") or die (mysqli_error($link));
if(!$insert)
{
echo "<div class='alert alert-info'>Unable to Insert Email Templates.....Please try again later</div>";
}
else{
echo "<div class='alert alert-success'>Email Templates Created Successfully!</div>";
}
}
}
?>

				</form>

	
</div>	
</div>	
</div>
</div>