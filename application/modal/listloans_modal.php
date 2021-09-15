<?php
$select = mysqli_query($link, "SELECT * FROM loan_info") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
?>

<div class="modal fade" id="myModal<?php echo $id; ?>" role="dialog">
    <div class="modal-dialog">
          <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
<legend>Editar Status</legend>
        </div>
        <div class="modal-body">
          <p>
		  
		  
		  <form class="form-horizontal" method="post"  enctype="multipart/form-data">
									
								<input type="hidden" value="<?php echo $id; ?>"  name="userid">

									<div class="form-group">
                  <label for="" class="col-sm-2 control-label"style="color:#FF0000">Actualizar Status</label>
				  <div class="col-sm-10">
				  <select name="Status" class="form-control" multiple="multiple" data-placeholder="Status" style="width: 100%;">
									<!-----<select class="form-control select2 " multiple="multiple" type="text" name="Status" >------>
											<option> </option>
											<option value="Approved">Aprovado</option>
											<option value="Disapproved">Reprovado</option>
										 </select>

                                    </div>
                                    </div>
								<div class="modal-footer">
								<button type="submit" name="update_status" class="btn btn-flat btn-success"><i class="icon-save"></i>&nbsp;Actualizar</button>
								<button class="btn btn-flat btn-danger" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>Fechar</button>
								</div>
								</div>

									<?php
										 if (isset($_POST['update_status'])) {
					
									$Status_save = $_POST['Status'];
									$UserID = $_POST['userid'];
																		
									mysqli_query($link,"UPDATE loan_info SET status='$Status_save' WHERE id = '$UserID'")or die(mysqli_error()); 
									echo "<script>window.location='listloans.php?id=".$_SESSION['tid']."'; </script>";
									
										
								
								}
									?>
										</form>
		  
		  </p>
        </div>
      </div>    
    </div>
	<?php } ?>