<?php include("include/header.php"); ?>
<style>
    table{
        width: 100%;
        text-align: center;
    }
    td{padding: 10px;}
</style>
<div class="box">
 	<div class="box-body">
		<div class="panel panel-success">
            <div class="panel-heading">
             	<h3 class="panel-title"><i class="fa fa-dollar"></i>&nbsp;Impactos Alcancados</h3>
            </div>
            <div class="box-body">
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
         <div class="box-body">
<fieldset><legend>Dados do Emprestimo</legend>
			 <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900"><b style="color:red">*</b> Mutuário</label>
				 <div class="col-sm-10">
                <select name="borrower" class="customer select2" style="width: 100%;" required>
          				<option>--Selecione Cliente--</option>
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
                  <label for="" class="col-sm-2 control-label" style="color:#009900"><b style="color:red">*</b> Conta</label>
                  <div class="col-sm-10">
                  <select class="account select2" name="account" style="width: 100%;" required>
			
				</select>
                  </div>
            </div>

		
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900"><b style="color:red">*</b> Linha de Financiamento</label>
                  <div class="col-sm-10">
                  <select class="credito select2" name="credito" style="width: 100%;" required>
				<option></option>
                  
				</select>
                  </div>
            </div>
    
    
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900"><b style="color:red">*</b> Cadeia de Valores</label>
                  <div class="col-sm-10">
                  <select class="cadeia select2" name="cadeia" style="width: 100%;" required>
				
				</select>
                  </div>
            </div>	
		
</fieldset>
<br>
<fieldset><legend>Produção por cultura</legend>
    <table cellpadding="5" id="producao" border="1">
        <thead>
            <th>Culturas</th>
            <th>Quantidade prevista</th>
            <th>Quantidade Alcançada</th>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</fieldset>
<br>
<fieldset><legend>Receitas por culturas</legend>
    <table cellpadding="5" id="receitas">
        <thead>
            <th>Culturas</th>
            <th>Receita prevista</th>
            <th>Acção</th>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</fieldset>
<br>
<fieldset><legend>Numero de empregos criados</legend>
    <table cellpadding="5">
        <thead>
            <th>Descricao</th>
            <th>Mulheres</th>
            <th>Homens</th>
            <th>Acção</th>
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <table cellpadding="5">
        <thead>
            <th>Descricao</th>
            <th>Mulheres</th>
            <th>Homens</th>
            <th>Acção</th>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</fieldset>
			 
			  <div align="right">
              <div class="box-footer">
                <button name="finalizar" type="button" class="btn btn-success btn-flat" ><i class="fa fa-save">&nbsp;Finalizar</i></button>

              </div>
			  </div>
			  </form>
			  

           
</div>	
</div>
</div>
</div>

<script type="text/javascript">
	$(function() {
	   $(".credito").on('change', function(){
	        preecher_select();
	    });
	    $(".customer").on('change', function(){
	        preecher_select2();
	        preecher_select3();
	    });
	    $(".cadeia").on('change', function(){
	        mostrarProd();
	    });
		function preecher_select() {
		    var ida = $(".credito").val();
			$.ajax({
				url: 'cadeiaValores.php',
				type: 'GET',
				data:{
				    id: ida
				},
				success: function(data) {
					$(".cadeia").html(data);
				},
				error: function() {
					$(".cadeia").html("Ocorreu um erro na tentativa de preencher o select!");
				}
			});
		}
		function mostrarProd() {
			$.ajax({
				url: 'mostrarProd.php',
				type: 'GET',
				data:{
				    mutuario: $(".customer").val(),
				    linha: $(".credito").val(),
				    cadeia: $(".cadeia").val()
				},
				success: function(data) {
					$("#tbody").html(data);
				},
				error: function() {
					$("#tbody").html("Ocorreu um erro na tentativa de mostrar as producoes por cultura!").css({color: "red"});
				}
			});
		}
		function preecher_select2() {
		    var ida = $(".customer").val();
			$.ajax({
				url: 'numeroConta.php',
				type: 'GET',
				data:{
				    id: ida
				},
				success: function(data) {
					$(".account").html(data);
				},
				error: function() {
					$(".account").html("Ocorreu um erro na tentativa de preencher o select!");
				}
			});
		}
		function preecher_select3() {
		    var ida = $(".customer").val();
			$.ajax({
				url: 'linha_impacto.php',
				type: 'GET',
				data:{
				    id: ida
				},
				success: function(data) {
					$(".credito").html(data);
				},
				error: function() {
					$(".credito").html("Ocorreu um erro na tentativa de preencher o select!");
				}
			});
		}
	});
</script>