<div class="box">
	<div align="right">	    
	
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-gear"></i>&nbsp;Banner Setup</h3>
            </div>
             <div class="box-body">
<div align="left">	  
<a href="#k"> <button type="button" data-target= "#k" class="btn btn-success btn-flat" data-toggle="modal" data-toggle="tooltip"><i class="fa fa-plus">&nbsp;Add Banner</i></button></a>
</div>			 
               
			 <div class="table-responsive">
           
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                <tr>
                  <th>ID</th>
				  <th>Banner</th>
				  <th>Operation</th>
                </tr>
				</thead>
                <tbody>
<?php
$id = $_SESSION['tid'];
$query = mysqli_query($link, "SELECT banaid,bannar FROM banner") or die (mysqli_error($link));
if(mysqli_num_rows($query)==0)
{
echo "<strong><p align='center' class='alert alert-danger'>No Banner Yet!......</p></strong>";
}
else{
while($row = mysqli_fetch_array($query)){
$banaid = $row['banaid'];
$bannar = $row['bannar'];
?>

                <tr>
				  <td><?php echo $banaid; ?></td>
				  <td><a href="#t<?php echo $banaid; ?>"> <button type="button" data-target= "#t<?php echo $banaid; ?>" class="btn btn-info" data-toggle="modal" data-toggle="tooltip"><i class="fa fa-search-plus"></i><img src="<?php echo $bannar; ?>" width="50" height="50"></td>
				  <th><a href="delete_banner.php?id=<?php echo $banaid; ?>" class="btn btn-danger"><i class="fa fa-gears"></i>&nbsp;Delete</a></th>
                </tr>
<?php
}
}
?> 
          		</tbody>
                </table> 
                </div>


</div>	
</div>	
</div>
</div>
</div>