<div class="row">
		
	       
<section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             	<div class="box-body">
<form method="post">
			 <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Voltar</button> </a> 
<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Borrower Details'") or die ("Error" . mysqli_error($link));
while($get_check = mysqli_fetch_array($check)){
$pdelete = $get_check['pdelete'];
$pcreate = $get_check['pcreate'];
?>
	<?php echo ($pdelete == '1') ? '<button type="submit" class="btn btn-flat btn-danger" name="delete"><i class="fa fa-times"></i>&nbsp;Apagar varios</button>' : ''; ?>
	<?php echo ($pcreate == '1') ? '<a href="newborrowers.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("403").'"><button type="button" class="btn btn-flat btn-success"><i class="fa fa-plus"></i>&nbsp;Adicionar Mutuario</button></a>' : ''; ?>
<?php } ?>

<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Internal Message'") or die ("Error" . mysqli_error($link));
while($get_check = mysqli_fetch_array($check)){
$pcreate = $get_check['pcreate'];
?>
	<?php echo ($pcreate == '1') ? '<a href="send_smsloan.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-envelope"></i>&nbsp;Enviar SMS</button></a>' : ''; ?>
<?php } ?>
	<a href="printborrow.php" target="_blank" class="btn btn-primary btn-flat"><i class="fa fa-print"></i>&nbsp;Imprimir</a>
	<a href="borrowexcel.php" target="_blank" class="btn btn-success btn-flat"><i class="fa fa-send"></i>&nbsp;Exportar Excel</a>
	<a href="pdfborrow.php" target="_blank" class="btn btn-info btn-flat"><i class="fa fa-file-pdf-o"></i>&nbsp;Exportar PDF</a>
	
	<hr>		
			  
			 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><input type="checkbox" id="select_all"/></th>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Nome</th>
				  <th>Apelido</th>
                  <th>Email</th>
                  <th>Telemovel</th>
                  <th>Estado</th>
                  <th>Acçao</th>
                 </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT * FROM borrowers WHERE comment != ''") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>Sem daos!.....Veja mas!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
$lname = $row['lname'];
$fname = $row['fname'];
$email = $row['email'];
$phone = $row['phone'];
$status = $row['status'];
//$image = $row['image'];
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Borrower Details'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pupdate = $get_check['pupdate'];
$pread= $get_check['pread'];
?>    
                <tr>
				<td><input id="optionsCheckbox" class="checkbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
                <td><?php echo $id; ?></td>
				 <td><img class="img-circle" src="../<?php echo $row ['image'];?>" width="30" height="30"></td>
                <td><?php echo $lname; ?></td>
				<td><?php echo $fname; ?></td>
				<td><?php echo $email; ?></td>
                <td><?php echo $phone; ?></td>
<?php
if($status == "Pending")
{
?>
				<td align="center" class="alert alert-danger"><?php echo $status; ?><br><?php echo ($pupdate == '1') ? '<a href="updateborrowers.php?id='.$id.'&&mid='.base64_encode("403").'">Click para terminar registo!</a>' : ''; ?></td>
<?php
}
else{
?>
				<td align="center" class="alert alert-success"><?php echo $status; ?></td> 
<?php } ?>
				<td align="center"><?php echo ($pupdate == '1') ? '<a href="updateborrowers.php?id='.$id.'&&mid='.base64_encode("403").'" class="btn btn-info btn-flat">Actualizar</a>' : '<i class="fa fa-lock"></i>'; ?>
<?php
$se = mysqli_query($link, "SELECT * FROM battachment WHERE get_id = '$id'") or die (mysqli_error($link));
while($gete = mysqli_fetch_array($se))
{
?>
				<?php echo ($pread == '1') ? '<a href="'.$gete['attached_file'].'"><button type="button" class="btn btn-flat btn-success"><i class="fa fa-download"></i>&nbsp;Baixar Documento</button></a>' : ''; ?>
<?php } ?>  
			
				</td>
    </tr>
<?php } } ?>
             </tbody>
                </table>  
<?php
						if(isset($_POST['delete'])){
						$idm = $_GET['id'];
							$id=$_POST['selector'];
							$N = count($id);
						if($id == ''){
						echo "<script>alert('Sem linhas Selecionadas!!!'); </script>";	
						echo "<script>window.location='listborrowers.php?id=".$_SESSION['tid']."&&mid=".base64_encode("403")."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM borrowers WHERE id ='$id[$i]'");
								echo "<script>alert('Deletado com Sucesso!!!'); </script>";
								echo "<script>window.location='listborrowers.php?id=".$_SESSION['tid']."&&mid=".base64_encode("403")."'; </script>";
							}
							}
							}
?>			
</form>
				

              </div>


	
</div>	
</div>
</div>	
</div>