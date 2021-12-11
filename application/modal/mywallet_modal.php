<?php 
session_start();
include_once '../../config/connect.php'; ?>
<div class="modal modal-default" id="b" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div id="printarea">
	  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <strong> <h4 class="modal-title" align="center">Inserir Linha de Financiamento</h4></strong></div>
        <div class="modal-body">
		    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
			 <div class="box-body">
			
			<div class="form-group">
            	<label for="" class="col-sm-2 control-label" style="color:#009900">Linha de Financiamento</label>
					<div class="col-sm-10">
						<input name="credito" type="text" class="form-control" placeholder="Descreva o tipo de credito">
					</div>
            </div>
									
		</div>

		<hr>
		<div align="right">
  		 <button type="submit" class="btn btn-success btn-flat" name="save"><i class="fa fa-save"></i>&nbsp;Gravar</button>
		<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">&nbsp;Fechar</button>
<?php
if(isset($_POST['save']))
{
	$credito = mysqli_real_escape_string($link, $_POST['credito']);
	
	$sql = "INSERT INTO tipo_credito(tipo_credito) VALUES('$credito')";
	$rs = mysqli_query($link, $sql);
	if($rs > 0){
	    echo "<script>alert('Adcionou a linha de financiamento com sucesso!'); </script>";
		echo "<script>window.location='mywallet.php?tid=".$_SESSION['tid']."'; </script>";
	}else{
	    echo "<script>alert('Erro ao inserir!....Tente novamente!!'); </script>";
		echo "<script>window.location='mywallet.php?tid=".$_SESSION['tid']."'; </script>";
	}
}
?>
		</form> 
		</div>
        </div>
      </div>
    </div>
	</div>
  </div>
  
 
<div class="modal modal-default" id="c" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div id="printarea">
	  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <strong> <h4 class="modal-title" align="center">Inserir Linha de Financiamento</h4></strong></div>
        <div class="modal-body">
		    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
			 <div class="box-body">
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Linha de Financiamento</label>
                  <div class="col-sm-10">
                  <select class="account select2" name="tcredito" style="width: 100%;">
				<option selected="selected">--Selecionar Linha de Financiamento--</option>
                  <?php
				$getin = mysqli_query($link, "SELECT * FROM tipo_credito order by id") or die (mysqli_error($link));
				while($row = mysqli_fetch_array($getin))
				{
				echo '<option value="'.$row['id'].'">'.$row['tipo_credito'].'</option>';
				}
				?>
				</select>
                  </div>
            </div>
			<div class="form-group">
            	<label for="" class="col-sm-2 control-label" style="color:#009900">Tipo de Credito</label>
					<div class="col-sm-10">
						<input name="cadeia" type="text" class="form-control" placeholder="Descreva o Tipo de Credito">
					</div>
            </div>
									
		</div>

		<hr>
		<div align="right">
  		 <button type="submit" class="btn btn-success btn-flat" name="savet"><i class="fa fa-save"></i>&nbsp;Gravar</button>
		<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">&nbsp;Fechar</button>
<?php
if(isset($_POST['savet']))
{
	$tcredito = mysqli_real_escape_string($link, $_POST['tcredito']);
	$cadeia = mysqli_real_escape_string($link, $_POST['cadeia']);
	
	$sql = "INSERT INTO cadeia_valores(cadeia_valores, tipo_credito) VALUES('$cadeia','$tcredito')";
	$rs = mysqli_query($link, $sql);
	if($rs > 0){
	    echo "<script>alert('Adcionou o tipo de credito com sucesso!'); </script>";
		echo "<script>window.location='mywallet.php?tid=".$_SESSION['tid']."'; </script>";
	}else{
	    echo "<script>alert('Erro ao inserir!....Tente novamente!!'); </script>";
		echo "<script>window.location='mywallet.php?tid=".$_SESSION['tid']."'; </script>";
	}
}
?>
		</form> 
		</div>
        </div>
      </div>
    </div>
	</div>
  </div>
  
  
 <?php
$tid = $_SESSION['tid'];
$select = mysqli_query($link, "SELECT * FROM mywallet") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
$amt = $row['Amount'];
$desc = $row['Desc'];
$wtype = $row['wtype'];
$tdate = $row['tdate'];
?>    
 <div class="modal modal-danger" id="d<?php echo $id;?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div id="printarea">
	  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style=" color:#FFFFFF">&times;</button>
         <strong> <h4 class="modal-title" style="color:#FFFFFF"align="center">Confirmar</h4></strong>
        </div>
        <div class="modal-body">
		  
			<div align="center" style="color: #FFFFFF"<strong>Tem Certeza que pretende deletar&nbsp;?</strong></div>
		<hr>
  		 <a href="del_wallet.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-info btn-flat  btn-outline" ><i class="fa fa-trash"></i>Yes</button></a>
		<button type="button" class="btn btn-danger btn-flat btn-outline" data-dismiss="modal">No</button>
        </div>
      </div>
      
    </div>
	</div>
  </div>
 <?php } ?>