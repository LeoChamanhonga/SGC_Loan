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

$insert = mysqli_query($link, "INSERT INTO borrowers VALUES('','$fname','$lname','$email','$phone','$addrs1','$addrs2','$city','$state','$zip','$country','$comment','$account','0.0','$location',NOW(),'$status')") or die (mysqli_error($link));
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
  		  			<input type='file' name="image" onChange="readURL(this);" /required>
       				 <img id="blah"  src="../avtar/user2.png" alt="Image Here" height="100" width="100"/>
				</div>
			</div>
			
			<div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Numero de Conta</label>
            <div class="col-sm-10">
<?php
$account = '013'.rand(1000000,10000000);
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
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Email</label>
                  <div class="col-sm-10">
                  <input type="email" name="email" type="text" class="form-control" placeholder="Email">
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Telemovel</label>
                  <div class="col-sm-10">
                  <input name="phone" type="text" class="form-control" placeholder="Mobile Number" required>
                  </div>
                  </div>
				  
				  
		 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Endereço 1</label>
                  	<div class="col-sm-10"><textarea name="addrs1"  class="form-control" rows="4" cols="80"></textarea></div>
          </div>
					
			<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Endereço 2</label>
                  	<div class="col-sm-10"><textarea name="addrs2"  class="form-control" rows="4" cols="80"></textarea></div>
          	</div>
			
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Cidade</label>
                  <div class="col-sm-10">
                  <input name="city" type="text" class="form-control" placeholder="Cidade"required >
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Provincia</label>
                  <div class="col-sm-10">
                  <input name="state" type="text" class="form-control" placeholder="Provincia" required>
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Codigo</label>
                  <div class="col-sm-10">
                  <input name="zip" type="text" class="form-control" placeholder="Codigo" >
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Pais</label>
                <div class="col-sm-10">
				<select name="country"  class="form-control" required>
										<option value="">Selecione Pais&hellip;</option>
										<option value="AX">&#197;land Islands</option>
										<option value="BB">Barbados</option>
										<option value="BY">Belarus</option>
										<option value="MZ">Moçambique</option>
										<option value="MM">Myanmar</option>
										<option value="NA">Namibia</option>
										<option value="NR">Nauru</option>
										<option value="NP">Nepal</option>
										<option value="NL">Netherlands</option>
										<option value="AN">Netherlands Antilles</option>
										<option value="NC">New Caledonia</option>
										<option value="NZ">New Zealand</option>
										<option value="NI">Nicaragua</option>
										<option value="NE">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="NU">Niue</option>
										<option value="NF">Norfolk Island</option>
										<option value="KP">North Korea</option>
										<option value="NO">Norway</option>
										<option value="OM">Oman</option>
										<option value="PK">Pakistan</option>
										<option value="PS">Palestinian Territory</option>
										<option value="PA">Panama</option>
										<option value="PG">Papua New Guinea</option>
										<option value="PY">Paraguay</option>
										<option value="PE">Peru</option>
										<option value="PH">Philippines</option>
										<option value="PN">Pitcairn</option>
										<option value="PL">Poland</option>
										<option value="PT">Portugal</option>
										<option value="QA">Qatar</option>
										<option value="IE">Republic of Ireland</option>
										<option value="RE">Reunion</option>
										<option value="RO">Romania</option>
										<option value="RU">Russia</option>
										<option value="RW">Rwanda</option>
										<option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option>
										<option value="BL">Saint Barth&eacute;lemy</option>
										<option value="SH">Saint Helena</option>
										<option value="KN">Saint Kitts and Nevis</option>
										<option value="LC">Saint Lucia</option>
										<option value="SX">Saint Martin (Dutch part)</option>
										<option value="MF">Saint Martin (French part)</option>
										<option value="PM">Saint Pierre and Miquelon</option>
										<option value="VC">Saint Vincent and the Grenadines</option>
										<option value="SM">San Marino</option>
										<option value="SA">Saudi Arabia</option>
										<option value="SN">Senegal</option>
										<option value="RS">Serbia</option>
										<option value="SC">Seychelles</option>
										<option value="SL">Sierra Leone</option>
										<option value="SG">Singapore</option>
										<option value="SK">Slovakia</option>
										<option value="SI">Slovenia</option>
										<option value="SB">Solomon Islands</option>
										<option value="SO">Somalia</option>
										<option value="ZA">South Africa</option>
										<option value="GS">South Georgia/Sandwich Islands</option>
										<option value="KR">South Korea</option>
										<option value="SS">South Sudan</option>
										<option value="ES">Spain</option>
										<option value="LK">Sri Lanka</option>
										<option value="SD">Sudan</option>
										<option value="SR">Suriname</option>
										<option value="SJ">Svalbard and Jan Mayen</option>
										<option value="SZ">Swaziland</option>
										<option value="SE">Sweden</option>
										<option value="CH">Switzerland</option>
										<option value="SY">Syria</option>
										<option value="TW">Taiwan</option>
										<option value="TJ">Tajikistan</option>
										<option value="TZ">Tanzania</option>
										<option value="TH">Thailand</option>
										<option value="TL">Timor-Leste</option>
										<option value="TG">Togo</option>
										<option value="TK">Tokelau</option>
										<option value="TO">Tonga</option>
										<option value="TT">Trinidad and Tobago</option>
										<option value="TN">Tunisia</option>
										<option value="TR">Turkey</option>
										<option value="TM">Turkmenistan</option>
										<option value="TC">Turks and Caicos Islands</option>
										<option value="TV">Tuvalu</option>
										<option value="UG">Uganda</option>
										<option value="UA">Ukraine</option>
										<option value="AE">United Arab Emirates</option>
										<option value="GB">United Kingdom (UK)</option>
										<option value="US" selected='selected'>United States (US)</option>
										<option value="ZM">Zambia</option>
										<option value="ZW">Zimbabwe</option>
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