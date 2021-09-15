<div class="row">	
		
	 <section class="content">
     
	<?php echo '<div class="alert alert-warning fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Please Note that&nbsp;</strong> &nbsp;&nbsp;You Must Tick All Added Checkbox Before Clicking on update button below
				</div>'?>
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">

			 <div class="col-md-14">
             <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
              <li><a href="#tab_1" data-toggle="tab">Loan Information</a></li>
              <li class="active"><a href="#tab_2" data-toggle="tab">Additional Fees</a></li>
              <li><a href="#tab_3" data-toggle="tab">Attachment</a></li>
              <li><a href="#tab_4" data-toggle="tab">Collateral</a></li>
              <li><a href="#tab_5" data-toggle="tab">Payment Schedule</a></li>
              </ul>
             <div class="tab-content">
             <div class="tab-pane" id="tab_1">
<?php
$id = $_GET['id'];
$select = mysqli_query($link, "SELECT * FROM loan_info WHERE id = '$id'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
$borrower = $row['borrower'];   
?>           
			 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="process_loan_info.php">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
				
			
			 <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Borrower</label>
				 <div class="col-sm-10">
				<?php
				$get = mysqli_query($link, "SELECT * FROM borrowers WHERE id = '$borrower'") or die (mysqli_error($link));
				while($rows = mysqli_fetch_array($get))
				{
				?>
					<input name="borrower" type="text" class="form-control" value=<?php echo $rows['fname'].'&nbsp;'.$rows['lname']; ?> readonly>
				<?php } ?>
              </div>
			  </div>
			  
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Account</label>
                  <div class="col-sm-10">
                  <input name="account" type="text" class="form-control" value="<?php echo $row['baccount']; ?>" readonly>
                  </div>
                  </div>
				 
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Amount</label>
                  <div class="col-sm-10">
                  <input name="amount" type="text" class="form-control" value="<?php echo $row['amount']; ?>" readonly>
                  </div>
                  </div>
		
		 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Description</label>
                  	<div class="col-sm-10">
					<textarea name="desc"  class="form-control" rows="4" cols="80" readonly><?php echo $row['desc']; ?></textarea>
           			 </div>
					 </div>
		
		 <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Date Release</label>
			 <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="date_release" type="text" class="form-control pull-right" value="<?php echo $row['date_release']; ?>" readonly>
                </div>
              </div>
			  </div>
			  
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Agent</label>
                  <div class="col-sm-10">
                  <input name="agent" type="text" class="form-control" value="<?php echo $row['agent']; ?>" readonly>
                  </div>
                  </div>
				  
				 
				  
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Status</label>
                  <div class="col-sm-10">
                  <input name="status" type="text" class="form-control" value="<?php echo $row['status']; ?>"readonly="readonly">
                  </div>
                  </div>
				  					
			<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Remarks</label>
                  	<div class="col-sm-10">
					<textarea name="remarks"  class="form-control" rows="4" cols="80" readonly="readonly"><?php echo $row['remarks']; ?></textarea>
           			 </div>
          	</div>



<hr>	
<div class="alert-danger">&nbsp;GUARANTOR INFORMATION</div>
<hr>
				  
			<div class="form-group">
				<label for="" class="col-sm-2 control-label" style="color:#009900">Gurantor's Passport</label>
				<div class="col-sm-10">
  		  		
       			 <img id="blah"  src="../<?php echo $row ['g_image'] ;?>" alt="Image Here" height="100" width="100"/>
			</div>
			</div>
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Relationship</label>
                  <div class="col-sm-10">
                  <input name="grela" type="text" class="form-control" value="<?php echo $row['rela']; ?>" readonly="readonly">
                  </div>
                  </div>
			
			 <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Guarantor's Name</label>
                  <div class="col-sm-10">
                  <input name="agent" type="text" class="form-control" value="<?php echo $row['g_name']; ?>" readonly>
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Guarantor's Phone Number</label>
                  <div class="col-sm-10">
                  <input name="agent" type="text" class="form-control" value="<?php echo $row['g_phone']; ?>" readonly>
                  </div>
                  </div>
				  
				 
				 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Guarantor's Address</label>
                  	<div class="col-sm-10">
					<textarea name="gaddress"  class="form-control" rows="4" cols="80" readonly="readonly"><?php echo $row['g_address']; ?></textarea>
           			 </div>
          	</div> 
			

			
<hr>	
<div class="alert-danger">&nbsp;PAYMENT INFORMATION</div>
<hr>	
					
					 <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Current Balance</label>
                  <div class="col-sm-10">
                  <input name="user" type="text" class="form-control" value="0.00" readonly>
                  </div>
                  </div>
				  
				   <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Payment Date</label>
			 <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="pay_date" type="text" class="form-control pull-right" value="<?php echo $row['pay_date']; ?>" readonly>
                </div>
              </div>
			  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Amount to Pay</label>
                  <div class="col-sm-10">
                  <input name="amount_topay" type="number" class="form-control" value="<?php echo $row['amount_topay']; ?>" readonly>
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Teller By</label>
                  <div class="col-sm-10">
                  <input name="teller" type="text" class="form-control" value="<?php echo $row['teller']; ?>" readonly>
                  </div>
                  </div>
				
				
				<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Remarks</label>
                  	<div class="col-sm-10">
					<textarea name="remark"  class="form-control" rows="4" cols="80" readonly="readonly"><?php echo $row['remarks']; ?></textarea>
           			 </div>
          	</div>
				  
			 </div>
			 
			  </form>
<?php } ?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="tab_2">
			  <form method="post">
			 			 <table>
<div align="center"><h4>Additional Fees</h4></div>
                <tbody> 
<?php
$id = $_GET['id'];
$search = mysqli_query($link, "SELECT * FROM additional_fees WHERE get_id = '$id'") or die (mysqli_error($link));
while($have = mysqli_fetch_array($search))
{
$idme= $have['id'];
?>			
				<tr>
				<td width="30"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $idme; ?>" checked></td>
				<td width="800"><input name="fee[]" type="text" class="form-control" placeholder="Fee" value="<?php echo $have['fee']; ?>"></td>
				<td width="300"><input name="amount[]" type="number" class="form-control" placeholder="Amount" value="<?php echo $have['Amount']; ?>"></td>
				</tr>
<?php } ?>
				</tbody>
                </table>
<div align="left">
              <div class="box-footer">
                				<button type="submit" class="btn btn-success btn-flat" name="add_fees_rows"><i class="fa fa-plus">&nbsp;Add Row</i></button>
                				<button name="delrow" type="submit" class="btn btn-danger btn-flat"><i class="fa fa-trash">&nbsp;Delete Row</i></button>

              </div>
			  </div>
   <?php
						if(isset($_POST['delrow'])){
						$idm = $_GET['id'];
							$id=$_POST['selector'];
							$N = count($id);
						if($N == 0){
						echo "<script>alert('Row Not Selected!!!'); </script>";	
						echo "<script>window.location='updateloans.php?id=".$idm."&&mid=".base64_encode("405")."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM additional_fees WHERE id ='$id[$i]'");
								echo "<script>window.location='updateloans.php?id=".$idm."&&mid=".base64_encode("405")."'; </script>";
							}
							}
							}
?>

<?php
if(isset($_POST['add_fees_rows']))
{
$id = $_GET['id'];
$tid = $_SESSION['tid'];
$insert = mysqli_query($link, "INSERT INTO additional_fees(id,get_id,tid,fee,Amount) VALUES('','$id','$tid','','')") or die (mysqli_error($link));
if(!$insert)
{
echo "<script>alert('Unable to add row!!!'); </script>";
echo "<script>window.location='updateloans.php?id=".$id."&&mid=".base64_encode("405")."'; </script>";
}
else{
echo "<script>window.location='updateloans.php?id=".$id."&&mid=".base64_encode("405")."'; </script>";
}
}
?>
<div align="right">
              <div class="box-footer">
               <button type="submit" class="btn btn-info btn-flat" name="add_fees"><i class="fa fa-save">&nbsp;Update Additional Fees</i></button>

              </div>
			  </div>
<?php
if(isset($_POST['add_fees']))
{
$idm = $_GET['id'];
$id = $_POST['selector'];
if($id == ''){
echo "<script>alert('Row Not Selected!!!'); </script>";	
echo "<script>window.location='updateloans.php?id=".$idm."&&mid=".base64_encode("405")."'; </script>";
}
else{
$i = 0;
foreach($_POST['selector'] as $s)
{
$fee = mysqli_real_escape_string($link, $_POST['fee'][$i]);
$amount = mysqli_real_escape_string($link, $_POST['amount'][$i]);
$update = mysqli_query($link, "UPDATE additional_fees SET fee = '$fee', Amount = '$amount' WHERE id = '$s'") or die (mysqli_error($link));
$i++;
if(!$update)
{
echo "<script>alert('Record not inserted.....Please try again later!'); </script>";
}
else{
echo "<script>alert('Additional Fees/Payment Info Added Successfully!!'); </script>";
echo "<script>window.location='updateloans.php?id=".$idm."&&mid=".base64_encode("405")."'; </script>";
}
}
}
}
?>
				</form>


              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">

                Attachments
Accepted file types <span style="color:#FF0000">jpg, gif, png, xls, xlsx, csv, doc, docx, pdf</span>
			 <input name="uploaded_file" type="file" class="btn btn-info">
			 <div align="left">
              <div class="box-footer">
                				<button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-upload">&nbsp;Upload</i></button>
              </div>
			  </div>
<?php
if(isset($_POST['upload']))
{
$id = $_GET['id'];
$tid = $_SESSION['tid'];

//upload random name/number
	 $rd2 = mt_rand(1000,9999)."_File"; 
	 
	 //Check that we have a file
	if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
  //Check if the file is JPEG image and it's size is less than 350Kb
  $filename = basename($_FILES['uploaded_file']['name']);
  
  $ext = substr($filename, strrpos($filename, '.') + 1);
  
  if (($ext != "exe") && ($_FILES["uploaded_file"]["type"] != "application/x-msdownload"))  {
    //Determine the path to which we want to save this file      
	  //$newname = dirname(__FILE__).'/upload/'.$filename;
	  $newname="document/".$rd2."_".$filename;      
	  //Check if the file with the same name is already exists on the server
 
        //Attempt to move the uploaded file to it's new place
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
			//successful upload
          // echo "It's done! The file has been saved as: ".$newname;		   

$insert = mysqli_query($link, "INSERT INTO attachment(id,get_id,tid,attached_file,date_time) VALUES('','$id','$tid','$newname',NOW())") or die (mysqli_error($link));
if(!$insert)
{
echo "<script>alert('Record not inserted.....Please try again later!'); </script>";
}
else{
echo "<script>alert('Documents Added Successfully!!'); </script>";
}
}
}
}
}
?>
			 </form> 
              </div>
			
			<div class="tab-pane" id="tab_4">
<?php
$id = $_GET['id'];
$search = mysqli_query($link, "SELECT * FROM collateral WHERE idm = '$id'") or die (mysqli_error($link));
if(mysqli_num_rows($search)==1)
{
$row = mysqli_fetch_array($search);
?>			
			<form class="form-horizontal" method="post" enctype="multipart/form-data">
<div align="center"><h4>Collateral</h4></div>
<div align="center">Fields in red are required</div>

				<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Name:</label>
                  <div class="col-sm-10">
                  <input name="name" type="text" class="form-control" value="<?php echo $row['name']; ?>">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Type of Collateral:</label>
                  <div class="col-sm-10">
                  <input name="tcol" type="text" class="form-control" value="<?php echo $row['type_of_collateral']; ?>">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Model:</label>
                  <div class="col-sm-10">
                  <input name="model" type="text" class="form-control" value="<?php echo $row['model']; ?>">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Make:</label>
                  <div class="col-sm-10">
                  <input name="make" type="text" class="form-control" value="<?php echo $row['make']; ?>">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Serial Number:</label>
                  <div class="col-sm-10">
                  <input name="snumber" type="text" class="form-control" value="<?php echo $row['serial_number']; ?>">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Estimated Price:</label>
                  <div class="col-sm-10">
                  <input name="eprice" type="text" class="form-control" value="<?php echo $row['estimated_price']; ?>">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Proof of Ownership:</label>
                  <div class="col-sm-10">
Accepted file types <span style="color:#FF0000">jpg, gif, png, xls, xlsx, csv, doc, docx, pdf</span>
			 <input name="uploaded_file" type="file" class="btn btn-info">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Image:</label>
                  <div class="col-sm-10">
Accepted file types <span style="color:#FF0000">jpg, png </span>
			 <input name="image" type="file" class="btn btn-info">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Observations:</label>
                  	<div class="col-sm-10">
					<textarea name="observe"  class="form-control" rows="4" cols="80"><?php echo $row['observation']; ?></textarea>
           			 </div>
          			</div>
			  
			  </form>
<?php
}
else{
?>
			<form class="form-horizontal" method="post" enctype="multipart/form-data">
<div align="center"><h4>Collateral</h4></div>
<div align="center">Fields in red are required</div>

				<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Name:</label>
                  <div class="col-sm-10">
                  <input name="name" type="text" class="form-control">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Type of Collateral:</label>
                  <div class="col-sm-10">
                  <input name="type_of_collateral" type="text" class="form-control">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Model:</label>
                  <div class="col-sm-10">
                  <input name="model" type="text" class="form-control">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Make:</label>
                  <div class="col-sm-10">
                  <input name="make" type="text" class="form-control">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Serial Number:</label>
                  <div class="col-sm-10">
                  <input name="serial_number" type="text" class="form-control">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Estimated Price:</label>
                  <div class="col-sm-10">
                  <input name="estimated_price" type="text" class="form-control">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Proof of Ownership:</label>
                  <div class="col-sm-10">
Accepted file types <span style="color:#FF0000">jpg, gif, png, xls, xlsx, csv, doc, docx, pdf</span>
			 <input name="uploaded_file" type="file" class="btn btn-info">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Image:</label>
                  <div class="col-sm-10">
Accepted file types <span style="color:#FF0000">jpg, png </span>
			 <input name="image" type="file" class="btn btn-info">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Observations:</label>
                  	<div class="col-sm-10">
					<textarea name="observation"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
          			</div>
              
			 <div align="left">
              <div class="box-footer">
                				<button type="submit" class="btn btn-success btn-flat" name="submit"><i class="fa fa-save">&nbsp;Submit</i></button>
              </div>
			  </div>
<?php
if(isset($_POST['submit']))
{
$id = $_GET['id'];
$tid = $_SESSION['tid'];
$name = mysqli_real_escape_string($link, $_POST['name']);
$type_of_collateral = mysqli_real_escape_string($link, $_POST['type_of_collateral']);
$model = mysqli_real_escape_string($link, $_POST['model']);
$make = mysqli_real_escape_string($link, $_POST['make']);
$serial_number = mysqli_real_escape_string($link, $_POST['serial_number']);
$estimated_price = mysqli_real_escape_string($link, $_POST['estimated_price']);
$proof_of_ownership = mysqli_real_escape_string($link, $_POST['proof_of_ownership']);

$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name = addslashes($_FILES['image']['name']);
$image_size = getimagesize($_FILES['image']['tmp_name']);

move_uploaded_file($_FILES["image"]["tmp_name"], "cimage/".$_FILES["image"]["name"]);

$cimage = "cimage/".$_FILES['image']['name'];

$observation = mysqli_real_escape_string($link, $_POST['observation']);

//upload random name/number
	 $rd2 = mt_rand(1000,9999)."_File"; 
	 
	 //Check that we have a file
	if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
  //Check if the file is JPEG image and it's size is less than 350Kb
  $filename = basename($_FILES['uploaded_file']['name']);
  
  $ext = substr($filename, strrpos($filename, '.') + 1);
  
  if (($ext != "exe") && ($_FILES["uploaded_file"]["type"] != "application/x-msdownload"))  {
    //Determine the path to which we want to save this file      
	  //$newname = dirname(__FILE__).'/upload/'.$filename;
	  $newname="document/".$rd2."_".$filename;      
	  //Check if the file with the same name is already exists on the server
 
        //Attempt to move the uploaded file to it's new place
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
			//successful upload
          // echo "It's done! The file has been saved as: ".$newname;		   

$insert = mysqli_query($link, "INSERT INTO collateral VALUES('','$id','$tid','$name','$type_of_collateral','$model','$make','$serial_number','$estimated_price','$proof_of_ownership','$cimage','$observation')") or die (mysqli_error($link));
if(!$insert)
{
echo "<script>alert('Record not inserted.....Please try again later!'); </script>";
}
else{
echo "<script>alert('Collateral Added Successfully!!'); </script>";
echo "<script>window.location='updateloans.php?id=".$id."&&mid=".base64_encode("405")."'; </script>";
}
}
}
}
}
?>	  
			  </form>
<?php } ?>
              </div>                 
			  
			  <div class="tab-pane" id="tab_5">
			<form class="form-horizontal" method="post" enctype="multipart/form-data">
			<div class="box-body">
<div align="center"><h4>Payment Schedule</h4></div>
				<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Term:</label>
                  <div class="col-sm-10">
				  <select name="d1[]" class="form-control">
				  <option value="Day">Day</option>
				  <option value="Week">Week</option>
				  <option value="Month">Month</option>
				  <option value="Year">Year</option>
				  </select>
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Term:</label>
                  <div class="col-sm-10">
				   <input name="term[]" type="text" class="form-control">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Schedule of Payment:</label>
                  <div class="col-sm-10">
				  <select name="schedule[]" class="form-control">
				  <option value="Daily">Daily</option>
				  <option value="Weekly">Weekly</option>
				  <option value="Bi-weekly">Bi-weekly</option>
				  <option value="Monthly">Monthly</option>
				  <option value="Bi-Monthly">Bi-Monthly</option>
				  <option value="Yearly">Yearly</option>
				  </select>
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Interest Rate:</label>
                  <div class="col-sm-10">
				   <input name="rate[]" type="text" class="form-control">%
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Penalty:</label>
                  <div class="col-sm-10">
				   <input name="penalty[]" type="text" class="form-control">%
                  </div>
                  </div>
				  
				   <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Schedules:</label>
                  <div class="col-sm-10">
				<table>
                <tbody> 
<?php
$id = $_GET['id'];
$searchin = mysqli_query($link, "SELECT * FROM pay_schedule WHERE get_id = '$id'") or die (mysqli_error($link));
while($haveit = mysqli_fetch_array($searchin))
{
$idmet= $haveit['id'];
?>			
				<tr>
			<td width="30"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $idmet; ?>" checked></td>
       <td width="400"><input name="schedulek[]" type="text" class="form-control pull-right" id="datepicker" placeholder="Schedule" value="<?php echo $haveit['schedule']; ?>"></td>
           <td width="300"><input name="balance[]" type="number" class="form-control" placeholder="Balance" value="<?php echo $haveit['balance']; ?>"></td>
			<td width="200"><input name="interest[]" type="number" class="form-control" placeholder="Interest" value="<?php echo $haveit['interest']; ?>"></td>
			<td width="100"><input name="payment[]" type="number" class="form-control" placeholder="Payment" value="<?php echo $haveit['payment']; ?>"></td>
			</tr>
<?php } ?>
				</tbody>
                </table>
<div align="left">
              <div class="box-footer">
                				<button type="submit" class="btn btn-success btn-flat" name="add_sch_rows"><i class="fa fa-plus">&nbsp;Add Row</i></button>
                				<button name="delrow2" type="submit" class="btn btn-danger btn-flat"><i class="fa fa-trash">&nbsp;Delete Row</i></button>

              </div>
			  </div>
   <?php
						if(isset($_POST['delrow2'])){
						$idm = $_GET['id'];
							$id=$_POST['selector'];
							$N = count($id);
						if($id == ''){
						echo "<script>alert('Row Not Selected!!!'); </script>";	
						echo "<script>window.location='updateloans.php?id=".$idm."&&mid=".base64_encode("405")."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM pay_schedule WHERE id ='$id[$i]'");
								echo "<script>window.location='updateloans.php?id=".$idm."&&mid=".base64_encode("405")."'; </script>";
							}
							}
							}
?>

<?php
if(isset($_POST['add_sch_rows']))
{
$id = $_GET['id'];
$tid = $_SESSION['tid'];
$insert = mysqli_query($link, "INSERT INTO pay_schedule(id,get_id,tid,schedule,balance,interest,payment) VALUES('','$id','$tid','','','','')") or die (mysqli_error($link));
if(!$insert)
{
echo "<script>alert('Unable to Add Row.....Please try again later!'); </script>";
}
else{
echo "<script>window.location='updateloans.php?id=".$id."&&mid=".base64_encode("405")."'; </script>";
}
}
?>
                  </div>
                  </div>
				  
              </div>
<div align="right">
              <div class="box-footer">
               <button type="submit" class="btn btn-info btn-flat" name="add_pay_schedule"><i class="fa fa-save">&nbsp;Update Collateral</i></button>

              </div>
			  </div>
<?php
if(isset($_POST['add_pay_schedule']))
{
$idm = $_GET['id'];
$id=$_POST['selector'];
$N = count($id);
if($N == 0){
echo "<script>alert('Row Not Selected!!!'); </script>";	
echo "<script>window.location='updateloans.php?id=".$idm."&&mid=".base64_encode("405")."'; </script>";
}
else{
$i = 0;
foreach($_POST['selector'] as $s)
{
$tid = $_SESSION['tid'];
$term = mysqli_real_escape_string($link, $_POST['term'][$i]);
$day = mysqli_real_escape_string($link, $_POST['d1'][$i]);
$schedule_of_paymt = mysqli_real_escape_string($link, $_POST['schedule'][$i]);
$interest = mysqli_real_escape_string($link, $_POST['interest'][$i]);
$penalty = mysqli_real_escape_string($link, $_POST['penalty'][$i]);
$schedule = mysqli_real_escape_string($link, $_POST['schedulek'][$i]);
$balance = mysqli_real_escape_string($link, $_POST['balance'][$i]);
$interest = mysqli_real_escape_string($link, $_POST['interest'][$i]);
$payment = mysqli_real_escape_string($link, $_POST['payment'][$i]);

$update = mysqli_query($link, "UPDATE pay_schedule SET schedule = '$schedule', balance = '$balance', interest = '$interest', payment = '$payment' WHERE id = '$s'") or die (mysqli_error($link));
$insert = mysqli_query($link, "INSERT INTO payment_schedule VALUES('','$s','$tid','$term','$day','$schedule_of_paymt','$interest','$penalty')") or die (mysqli_error($link));
$insert = mysqli_query($link, "UPDATE loan_info SET upstatus = 'Completed' WHERE id = '$idm'") or die (mysqli_error($link));
if(!($update && $insert))
{
echo "<script>alert('Record not inserted.....Please try again later!'); </script>";
}
else{
echo "<script>alert('Payment Scheduled Successfully!!'); </script>";
echo "<script>window.location='listloans.php?id=".$idm."&&mid=".base64_encode("405")."'; </script>";
}
}
}
}
?>
			  </form>
			  </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
				 
					
					
				
				
				</div>
				

              </div>
			 

	
</div>	
</div>
</div>	
</div>	