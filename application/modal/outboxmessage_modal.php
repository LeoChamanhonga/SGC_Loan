<?php
$tid = $_SESSION['tid'];
$select = mysqli_query($link, "SELECT * FROM message") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
$id = $row['id']; 
?>  
 <div class="modal modal-danger" id="d<?php echo $id;?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div id="printarea">
	  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style=" color:#FFFFFF">&times;</button>
         <strong> <h4 class="modal-title" style="color:#FFFFFF"align="center">Delete Confirmation</h4></strong>
        </div>
        <div class="modal-body">
		  
			<div align="center" style="color: #FFFFFF"<strong>Tem Certeza que quer deletar ??&nbsp;?</strong></div>
		<hr>
  		 <a href="del_msg_sent.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-info btn-flat  btn-outline" ><i class="fa fa-trash"></i>Yes</button></a>
		<button type="button" class="btn btn-danger btn-flat btn-outline" data-dismiss="modal">No</button>
        </div>
      </div>
      
    </div>
	</div>
  </div>
 <?php } ?>
