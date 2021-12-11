<!-- Edit Modal-->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar Pagamento</h4></center>
                </div>
<?php
$id = $_GET['id'];
$select = mysqli_query($link, "SELECT * FROM payments WHERE id = '$id'") or die (mysqli_error($link));
while($get = mysqli_fetch_array($select))
{
?>
	                
                
                

                <div class="modal-body">
    <div class="container-fluid">
     <div class="form-group input-group">
      <span class="input-group-addon" style="width:150px;" readyonly="true">Nome</span>
      <input type="text" style="width:350px;" class="form-control" id="nameit">
     </div>
     
     <div class="form-group input-group">
      <span class="input-group-addon" style="width:150px;">Valor a Pagar</span>
      <input type="text" style="width:350px;" class="form-control" id="amount_to_pay">
     </div>
     
      <div class="form-group input-group">
      <span class="input-group-addon" style="width:150px;">Referencia</span>
      <input type="text" style="width:350px;" class="form-control" id="referencia">
     </div>
     
      <div class="form-group input-group">
      <span class="input-group-addon" style="width:150px;">Data de Pagmento</span>
      <input type="text" style="width:350px;" class="form-control" value=<?php echo $getin['pay_date']; ?>"
      id="pay_date">
     </div>
  
    </div>
    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> </i> Actualizar</button>
                </div>
            </div>
        </div>
    </div>

<!-- /.modal -->