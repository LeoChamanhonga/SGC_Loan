<div class="box">
 	<div class="box-body">
		<div class="panel panel-success">
            <div class="panel-heading">
             	<h3 class="panel-title"><i class="fa fa-dollar"></i>&nbsp;Novo Emprestimo</h3>
            </div>
            <div class="box-body">

			<form class="form-horizontal" method="post" enctype="multipart/form-data" action="process_loan_info.php">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
				
			
			 <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Mutuário</label>
				 <div class="col-sm-10">
                <select name="borrower" class="customer select2" style="width: 100%;">
				<option selected="selected">--Selecione Cliente--</option>
				<?php
				$get = mysqli_query($link, "SELECT * FROM borrowers order by id") or die (mysqli_error($link));
				while($rows = mysqli_fetch_array($get))
				{
				echo '<option value="'.$rows['id'].'">'.$rows['fname'].'&nbsp;'.$rows['lname'].'</option>';
				}
				?>
                </select>
              </div>
			  </div>
			  
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Conta</label>
                  <div class="col-sm-10">
                  <select class="account select2" name="account" style="width: 100%;">
				<option selected="selected">--Selecionar Conta de Cliente--</option>
                  <?php
				$getin = mysqli_query($link, "SELECT * FROM borrowers order by id") or die (mysqli_error($link));
				while($row = mysqli_fetch_array($getin))
				{
				echo '<option value="'.$row['id'].'">'.$row['account'].'</option>';
				}
				?>
				</select>
                  </div>
            </div>

		
		<div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Tipo de Credito</label>
            <div class="col-sm-10">
				<select name="country"  class="form-control" required>
					<option value = "FAE">FAE</option>
					<option value="CAVAS">CAVAS</option>
				</select>
		    </div>
		</div>
				
		
		
		<div class="form-group">
            <label for="" class="col-sm-2 control-label" style="color:#009900">Valor</label>
                <div class="col-sm-10">
                  <input name="amount" type="text" class="form-control" placeholder="Valor" required>
                </div>
        </div>
		
		 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Descriçao</label>
                  	<div class="col-sm-10">
					<textarea name="desc"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
					 </div>
		
		 <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Data de adjudi</label>
			 <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="date_release" type="date" class="form-control pull-right" id="datepicker">
                </div>
              </div>
			  </div>
			  
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Gestor</label>
                  <div class="col-sm-10">
<?php
$tid = $_SESSION['tid'];
$sele = mysqli_query($link, "SELECT * from user WHERE id = '$tid'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($sele))
{
?>
                  <input name="agent" type="text" class="form-control" value="<?php echo $row['name']; ?>" readonly>
<?php } ?>
                  </div>
                  </div>
	<hr>	
<div class="alert-danger">&nbsp;AVALISTA</div>
<hr>
				  
			<div class="form-group">
				<label for="" class="col-sm-2 control-label" style="color:#009900">Doc Avalista</label>
				<div class="col-sm-10">
  		  		<input type='file' name="image" onChange="readURL(this);" /required>
       			 <img id="blah"  src="../avtar/user2.png" alt="Image Here" height="100" width="100"/>
			</div>
			</div>
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Relaçao</label>
                  <div class="col-sm-10">
                  <input name="grela" type="text" class="form-control" placeholder="Relaçao" required>
                  </div>
                  </div>
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Nome</label>
                  <div class="col-sm-10">
                  <input name="g_name" type="text" class="form-control" required placeholder = "Nome de Avalista">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Telemovel</label>
                  <div class="col-sm-10">
                  <input name="g_phone" type="text" class="form-control" required placeholder = "Telemovel">
                  </div>
                  </div>
				  
				 
				 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Morada </label>
                  	<div class="col-sm-10">
					<textarea name="gaddress"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
          	</div> 
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Estado</label>
                  <div class="col-sm-10">
                  <input name="status" type="text" class="form-control" value="Pending" readonly="readonly">
                  </div>
                  </div>
				  					
			<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Marcas</label>
                  	<div class="col-sm-10">
					<textarea name="remarks"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
          	</div>
			
<hr>	
<div class="alert-danger">&nbsp;INFO DE PAGAMENTO</div>
<hr>	
					
					 <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Saldo Actual</label>
                  <div class="col-sm-10">
                  <input name="user" type="text" class="form-control" value="0.00" readonly>
                  </div>
                  </div>
				  
				   <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Data de Pagamento</label>
			 <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="pay_date" type="date" class="form-control pull-right" id="datepicker2">
                </div>
              </div>
			  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Valor a pagar</label>
                  <div class="col-sm-10">
                  <input name="amount_topay" type="number" class="form-control" placeholder="Valor a pagar" >
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Faturado por</label>
                  <div class="col-sm-10">
<?php
$tid = $_SESSION['tid'];
$sele = mysqli_query($link, "SELECT * from user WHERE id = '$tid'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($sele))
{
?>
                  <input name="teller" type="text" class="form-control" value="<?php echo $row['name']; ?>" readonly>
<?php } ?>
                  </div>
                  </div>
				
				
			<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Remarks</label>
                  	<div class="col-sm-10">
					<textarea name="remark"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
          	</div>
				  
			 </div>
			 
			  <div align="right">
              <div class="box-footer">
                <button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                <button name="save_loan" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Gravar</i></button>

              </div>
			  </div>
			  </form>
			  

           
</div>	
</div>
</div>
</div>