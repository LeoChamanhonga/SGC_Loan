<div class="row">
    
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
			 <a href="permission_list.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("413"); ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
	<hr>	

<form class="form-horizontal" method="post" enctype="multipart/form-data">

<div class="box-body">

			<div class="form-group">
				<label for="" class="col-sm-2 control-label" style="color:#009900">User Name:</label>
                <div class="col-sm-10">
				<?php
					$search_user = mysqli_query($link, "SELECT * FROM user WHERE id != '".$_SESSION['tid']."'") or die ("Error: " . mysqli_error($link));
					while($get_users = mysqli_fetch_array($search_user))
					{
					?>		
					<b style="color: red;"><?php echo $get_users['name']; ?></b>
				<?php } ?>
                </div>			
            </div>
			<div class="form-group">
			<hr><hr>
			<div>
			
			 <table class="table" border="1">
			 <thead>
                <tr>
                  <th>S/No.</th>
                  <th>Module Name</th>
				  <th><div align="center">Create</div></th>
                  <th><div align="center">Read</div></th>
				  <th><div align="center">Update</div></th>
                  <th><div align="center">Delete</div></th>
                 </tr>
                </thead>
             <tbody>
<?php
$id = $_GET['id'];
$i = 0;
$search = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '$id'") or die (mysqli_error($link));
while($have = mysqli_fetch_array($search))
{
	$idme= $have['id'];
?>
                <tr>
				   <td><?php echo $idme; ?><input id="optionsCheckbox" class="uniform_on" name="selector[<?php echo $i; ?>]" type="hidden" value="<?php echo $idme; ?>" checked></td>
                   <td><?php echo $have['module_name']; ?></td>
				   <td><div align="center"><input id="optionsCheckbox" class="checkbox" name="pcreate[<?php echo $i; ?>]" type="checkbox" value="<?php echo ($have['pcreate'] == "0") ? 1 : $have['pcreate']; ?>" <?php echo ($have['pcreate'] == "0") ? '' : 'checked'; ?>></div></td>
				   <td><div align="center"><input id="optionsCheckbox" class="checkbox" name="pread[<?php echo $i; ?>]" type="checkbox" value="<?php echo ($have['pread'] == "0") ? 1 : $have['pread']; ?>" <?php echo ($have['pread'] == "0") ? '' : 'checked'; ?>></div></td>
				   <td><div align="center"><input id="optionsCheckbox" class="checkbox" name="pupdate[<?php echo $i; ?>]" type="checkbox" value="<?php echo ($have['pupdate'] == "0") ? 1 : $have['pupdate']; ?>" <?php echo ($have['pupdate'] == "0") ? '' : 'checked'; ?>></div></td>
				   <td><div align="center"><input id="optionsCheckbox" class="checkbox" name="pdelete[<?php echo $i; ?>]" type="checkbox" value="<?php echo ($have['pdelete'] == "0") ? 1 : $have['pdelete']; ?>" <?php echo ($have['pdelete'] == "0") ? '' : 'checked'; ?>></div></td>
                 </tr>
<?php 
if(isset($_POST['save']))
{
$ide = $_GET['id'];
$selector = $_POST['selector'];
$i = 0;
foreach($selector as $s)
{
//$module = mysqli_real_escape_string($link, $_POST['module'][$i]);
$pcreate = (isset($_POST['pcreate']) && ($_POST['pcreate'][$i] == '1')) ? 1 : 0;
$pread = (isset($_POST['pread']) && ($_POST['pread'][$i] == '1'))  ? 1 : 0;
$pupdate = (isset($_POST['pupdate']) && ($_POST['pupdate'][$i] == '1'))  ? 1 : 0;
$pdelete = (isset($_POST['pdelete']) && ($_POST['pdelete'][$i] == '1'))  ? 1 : 0;

$update_sel = mysqli_query($link, "UPDATE emp_permission SET pcreate = '$pcreate', pread = '$pread', pupdate ='$pupdate', pdelete ='$pdelete' WHERE id ='$s'") or die ("Error: " . mysqli_error($link));
$i++;

if(!$update_sel)
{
echo "<script>alert('Record not update.....Please try again later!'); </script>";
}
else{
echo "<script>alert('Update Successfully!!'); </script>";
echo "<script>window.location='edit_perm.php?id=".$ide."&&mid=".base64_encode("413")."'; </script>";
}
}
}
$i++;
}
?>
			 </tbody>
             </table> 

		<div align="right">
            <div class="box-footer">
				<button type="submit" class="btn btn-info btn-flat" name="save"><i class="fa fa-save">&nbsp;Update Module</i></button>
			</div>
		</div>

<?php

?>
		
</div>				
</form>
                </div>

				</div>	
				</div>
			
</div>	
					
       
</div>