<?php
$id = $_SESSION['tid'];
$query = mysqli_query($link, "SELECT banaid,bannar FROM banner") or die (mysqli_error($link));
while($row = mysqli_fetch_array($query)){
$banaid = $row['banaid'];
$bannar = $row['bannar'];
?>
 

 <div class="modal fade modal-info" id="t<?php echo $banaid; ?>" role="dialog">
			<div class="modal-dialog">
    
      <!-- Modal content-->
	  		<div class="modal-content">
        	<div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" style=" color:#FFFFFF">&times;</button>
           <strong> <h4 class="modal-title" style="color:#FFFFFF"align="center">PREVIEW BANNER</h4></strong>
           </div>
        		
				<div class="modal-body">
<div align="center">	

<img src="<?php echo $bannar; ?>" width="700" height="300">
</div>
<hr>
		        <button type="button" class="btn btn-danger btn-outline btn-flat" data-dismiss="modal"><i class="fa fa-minus"></i>&nbsp;Close</button>
      </div>
     </div>

   </div>
	</div> 

<?php } ?>
  
  
  
  <div class="modal fade modal-info" id="k" role="dialog">
			<div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
	  		<div class="modal-content">
        	<div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" style=" color:#FFFFFF">&times;</button>
           <strong> <h4 class="modal-title" style="color:#FFFFFF"align="center">UPLOAD BANNER!!!</h4></strong>
           </div>
        		
				<div class="modal-body">
					<span style="color:#FF0000"><h3>Please Make sure you upload bannar with image size: 1200 x 563 </h3></span>
				<div class="table-responsive">
				
				<form action="" method="post" enctype="multipart/form-data">
				 <div class="form-group">
                  <label for="" class="col-sm-2 control-label" align="center">Browse Image <span style="color:#FF0000">png format only</span></label>
				<div class="col-sm-10">
				
  		  			 <input type="file" name="image" onChange="readURL(this);" /required>
       				 <img id="blah" src="#" alt="your image"/>
				</div>
				
				</div>
				
			
<hr>
<button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-upload">Upload</i></button>
		        <button type="button" class="btn btn-danger btn-outline btn-flat" data-dismiss="modal"><i class="fa fa-minus"></i>&nbsp;No</button>
		        
		        
		        </form>
		        </div>
      </div>
     </div>

   </div>
	</div> 