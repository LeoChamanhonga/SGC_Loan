<div class="box">
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> Novo Mutuário</h3>
            </div>
             <div class="box-body">
            
			 <form class="form-horizontal" method="post" enctype="multipart/form-data">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note que&nbsp;</strong> &nbsp;&nbsp;Alguns campos obrigatorios.
				</div>'?>
             <div class="box-body">
<?php
if(isset($_POST['save']))
{
$fname =  mysqli_real_escape_string($link, $_POST['fname']);
$lname = mysqli_real_escape_string($link, $_POST['lname']);
$data_nascimento = mysqli_real_escape_string($link, $_POST['data_nascimento']);
$sexo = mysqli_real_escape_string($link, $_POST['sexo']);
$naturalidade = mysqli_real_escape_string($link, $_POST['naturalidade']);
$filiacao = mysqli_real_escape_string($link, $_POST['filiacao']);
$estado_civil = mysqli_real_escape_string($link, $_POST['estado_civil']);
$residencia = mysqli_real_escape_string($link, $_POST['residencia']);
$documento = mysqli_real_escape_string($link, $_POST['documento']);
$numero_documento = mysqli_real_escape_string($link, $_POST['numero_documento']);
$emissao = mysqli_real_escape_string($link, $_POST['emissao']);
$validade = mysqli_real_escape_string($link, $_POST['validade']);
$localEmit = mysqli_real_escape_string($link, $_POST['localEmit']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$addrs1 = mysqli_real_escape_string($link, $_POST['addrs1']);
$addrs2 = mysqli_real_escape_string($link, $_POST['addrs2']);
$city = mysqli_real_escape_string($link, $_POST['city']);
$state = mysqli_real_escape_string($link, $_POST['state']);
$zip = mysqli_real_escape_string($link, $_POST['zip']);
$country = mysqli_real_escape_string($link, $_POST['country']);
$comment = mysqli_real_escape_string($link, $_POST['comment']);
$account = mysqli_real_escape_string($link, $_POST['account']);
$status = "Pending";

//$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
//$image_name = addslashes($_FILES['image']['name']);
//$image_size = getimagesize($_FILES['image']['tmp_name']);

$target_dir = "../img/";
$target_file = $target_dir.basename($_FILES["image"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$check = getimagesize($_FILES["image"]["tmp_name"]);

if($check == false)
{
	echo '<meta http-equiv="refresh" content="2;url=view_emp.php?tid='.$id.'&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Tipo Inválido</span>';
}
elseif(file_exists($target_file)) 
{
	echo '<meta http-equiv="refresh" content="2;url=view_emp.php?tid='.$id.'&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Já Existe.</span>';
}
elseif($_FILES["image"]["size"] > 500000)
{
	echo '<meta http-equiv="refresh" content="2;url=view_emp.php?tid='.$id.'&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Image must not more than 500KB!</span>';
}
elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
{
	echo '<meta http-equiv="refresh" content="2;url=view_emp.php?tid='.$id.'&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Desculpa, only JPG, JPEG, PNG & GIF tipos permitido.</span>';
}
else{
	$sourcepath = $_FILES["image"]["tmp_name"];
	$targetpath = "../img/" . $_FILES["image"]["name"];
	move_uploaded_file($sourcepath,$targetpath);
	
	$location = "img/".$_FILES['image']['name'];

$insert = mysqli_query($link, "INSERT INTO borrowers VALUES('','$fname','$lname', '$data_nascimento', '$sexo', '$naturalidade', '$filiacao', '$estado_civil', '$residencia', '$documento', '$numero_documento', '$emissao', '$validade','$localEmit','$email','$phone','$addrs1','$addrs2','$city','$state','$zip','$country','$comment','$account','0.0','$location',NOW(),'$status')") or die (mysqli_error($link));
if(!$insert)
{
echo "<div class='alert alert-info'>impossivel inserir.....Por favor </div>";
}
else{
echo "<div class='alert alert-success'>Mutuario Criado Com Sucesso!</div>";
}
}
}
?>			  				
			<div class="form-group">
            <label for="" class="col-sm-2 control-label">Sua Imagem</label>
				<div class="col-sm-10">
  		  			<input type='file' name="image" onChange="readURL(this);" >
       				 <img id="blah"  src="../avtar/user2.png" alt="Image Here" height="100" width="100"/>
				</div>
			</div>
			
			<div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Numero de Conta</label>
            <div class="col-sm-10">
<?php
$account = '011'.rand(1000000,10000000);
?>
                  <input name="account" type="text" class="form-control" value="<?php echo $account; ?>" placeholder="Numero de Conta" readonly>
                  </div>
                  </div>
				  
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Nome</label>
                  <div class="col-sm-10">
                  <input name="fname" type="text" class="form-control" placeholder="Nome" required>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Apelido</label>
                  <div class="col-sm-10">
                  <input name="lname" type="text" class="form-control" placeholder="Apelido" required>
                  </div>
                  </div>
				    <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Data de Nascimento</label>
                <div class="col-sm-10">
                  <input name="data_nascimento" type="date" class="form-control" placeholder="Data de Nascimento" required>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Sexo</label>
              <div class="col-sm-10">
                <select name="sexo" class="form-control">
                  <option value="Masculino" selected="">Masculino</option>
              	  <option value="Femenino">Femenino</option>
                </select>
              </div>
            </div>
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Naturalidade</label>
                <div class="col-sm-10">
                  <input name="naturalidade" type="text" class="form-control" placeholder="Naturalidade" required>
                </div>
            </div>
            <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Filiacao</label>
                <div class="col-sm-10">
                  <input name="filiacao" type="text" class="form-control" placeholder="Nomes do pai e da mae" required>
                </div>
            </div> 
             <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Estado Civil</label>
                <div class="col-sm-10">
                  <input name="estado_civil" type="text" class="form-control" placeholder="Estado Civil" required>
                </div>
            </div>
            <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Local de Residencia</label>
                <div class="col-sm-10">
                  <input name="residencia" type="text" class="form-control" placeholder="Residencia" required>
                </div>
            </div>
            <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Documento</label>
                <div class="col-sm-10">
                  <select name="documento" class="form-control">
                  	<option value="BI" selected="">BI</option>
                  	<option value="Carta de Conducao" selected="">Carta de Conducao</option>
                  	<option value="Passaporte" selected="">Passaporte</option>
                  	<option value="Cartao de Eleitor">Cartao de Eleitor</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Numero do Documento</label>
                <div class="col-sm-10">
                  <input name="numero_documento" type="text" class="form-control" placeholder="Numero" required>
                </div>
            </div>
            <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Data da Emissao</label>
                <div class="col-sm-10">
                  <input name="emissao" type="date" class="form-control" placeholder="Data da Emissao" required>
                </div>
            </div>
            <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Validade</label>
                <div class="col-sm-10">
                  <input name="validade" type="date" class="form-control" placeholder="Validade" required>
                </div>
            </div>
            <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Local de Emissao</label>
                <div class="col-sm-10">
                  <input name="localEmit" type="text" class="form-control" placeholder="Local de Emissao" required>
                </div>
            </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label" style="color:#009900">Provincia</label>
            <div class="col-sm-10">
				      <select name="country"  class="form-control" required>
				        <option value="">Selecione Pais&hellip;</option>
                <?php
                    $getin = mysqli_query($link, "SELECT * FROM countries order by id") or die (mysqli_error($link));
                    while($row = mysqli_fetch_array($getin))
                    {
                    echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                    }
                ?>
				      </select>                 
				   </div>
         </div>
 
          <div class="form-group">
            <label for="" class="col-sm-2 control-label" style="color:#009900">Provincia</label>
              <div class="col-sm-10">
                <select name="country"  class="form-control" required>
                <option value="">Selecione Distrito&hellip;</option>
                <?php
                    $getin = mysqli_query($link, "SELECT * FROM city order by idcity") or die (mysqli_error($link));
                    while($row = mysqli_fetch_array($getin))
                    {
                    echo '<option value="'.$row['id'].'">'.$row['citydesc'].'</option>';
                    }
                ?>
                    
                </select>                 
              </div>
          </div>
									 
									 
				<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Comentários</label>
                  	<div class="col-sm-10"><textarea name="comment"  class="form-control" rows="4" cols="80"></textarea></div>
          		</div>

			 </div>
			 
			  <div align="right">
              	<div class="box-footer">
                	<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                	<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Gravar</i></button>

             		 </div>
			  </div>

			 </form> 


</div>	
</div>	
</div>
</div>