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
					$id = $_GET['id'];
					$search_user = mysqli_query($link, "SELECT * FROM user WHERE id = '$id'") or die ("Error: " . mysqli_error($link));
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
$search = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '$id'") or die (mysqli_error($link));
while($have = mysqli_fetch_array($search))
{
	$idme= $have['id'];
?>
                <tr>
				   <td><?php echo $idme; ?><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="hidden" value="<?php echo $idme; ?>" checked></td>
                   <td><?php echo $have['module_name']; ?></td>
				   <td><div align="center"><?php echo ($have['pcreate'] == "0") ? '<i style="color: red;" class="fa fa-times"></i>' : '<i style="color: green;" class="fa fa-check"></i>'; ?></div></td>
				   <td><div align="center"><?php echo ($have['pread'] == "0") ? '<i style="color: red;" class="fa fa-times"></i>' : '<i style="color: green;" class="fa fa-check"></i>'; ?></div></td>
				   <td><div align="center"><?php echo ($have['pupdate'] == "0") ? '<i style="color: red;" class="fa fa-times"></i>' : '<i style="color: green;" class="fa fa-check"></i>'; ?></div></td>
				   <td><div align="center"><?php echo ($have['pdelete'] == "0") ? '<i style="color: red;" class="fa fa-times"></i>' : '<i style="color: green;" class="fa fa-check"></i>'; ?></div></td>
                 </tr>
<?php } ?>
			 </tbody>
             </table> 

</div>				
</form>
                </div>

				</div>	
				</div>
			
</div>	
					
       
</div>