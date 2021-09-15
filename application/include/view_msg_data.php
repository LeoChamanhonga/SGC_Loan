<div class="box">

	         <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-envelope"></i> Reply Message</h3>
            </div>
             <div class="box-body">
<?php
$id =  $_GET['id'];
$select = mysqli_query($link, "SELECT * FROM message WHERE id = '$id'") or die (mysqli_error($link));
while($row =  mysqli_fetch_array($select))
{
?>
		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="process_msg1.php">
		 <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
			 <div class="box-body">
			 
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Reply To:</label>
                  <div class="col-sm-10">
				<input name="msg_to" type="hidden" class="form-control" value="<?php echo $row['sender_id']; ?>" readonly>
				<input name="to" type="text" class="form-control" value="<?php echo $row['sender_name']; ?>" readonly>
										</div>
										</div>	
			
			   <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Subject</label>
                  <div class="col-sm-10">
                  <input name="subject" type="text" class="form-control" value="RE: <?php echo $row['subject']; ?>">
                  </div>
                  </div>
				  
				   <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Message</label>
                  	<div class="col-sm-10">
					<textarea name="message" id="editor1"  class="form-control" rows="4" cols="80">   <br>-------------------------<br><?php echo $row['message']; ?></textarea>
           		</div>
				</div>
				</div>
				
				<div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="send" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Send</i></button>

              </div>
			  </div>
			  </form>
<?php } ?>

</div>	
</div>	
</div>
</div>