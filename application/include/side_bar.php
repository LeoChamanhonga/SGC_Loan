<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
		<?php 
			$id = $_SESSION['tid'];
			$call = mysqli_query($link, "SELECT * FROM user WHERE id = '$id'");
			if(mysqli_num_rows($call) == 0)
			{
			echo "<script>alert('Data Not Found!'); </script>";
			}
			else
			{
			while($row = mysqli_fetch_assoc($call))
			{
			
			?>
          <img src="../<?php echo $row['image'];?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $row ['username'] ;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		  <?php }}?>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("401")))
{
?>
		<li class="active"><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><i class="fa fa-dashboard"></i> <span>Dashbord</span></a></li>
<?php
}
else{
	?>
		<li><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><i class="fa fa-dashboard"></i> <span>Dashbord</span></a></li>
<?php } ?>
		
		
<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("402")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Email Panel'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>
		<?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fa fa-book"></i> <span>Painel de Email</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newemail.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("402").'"><i class="fa fa-circle-o"></i> Enviar Email</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listemail.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("402").'"><i class="fa fa-circle-o"></i>Lista de Email</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Email Panel'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
	?>	
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-book"></i> <span>Painel de Email</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newemail.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("402").'"><i class="fa fa-circle-o"></i> Enviar Email</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listemail.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("402").'"><i class="fa fa-circle-o"></i>Lista de Email</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php } ?>
		

<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("403")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Borrower Details'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fa fa-users"></i> <span>Mutuários</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newborrowers.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("403").'"><i class="fa fa-circle-o"></i> Novo Mutuário</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listborrowers.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("403").'"><i class="fa fa-circle-o"></i>Lista de Mutuários</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?> 
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Borrower Details'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-users"></i> <span>Mutuários</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newborrowers.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("403").'"><i class="fa fa-circle-o"></i> Novo Mutuário</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listborrowers.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("403").'"><i class="fa fa-circle-o"></i>Lista de Mutuários</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?> 
<?php } ?>		
	

<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("404")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Employee Wallet'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pread = $get_check['pread'];
?>	
	<?php echo ($pread == 1) ? '<li class="active"><a href="mywallet.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span>Minha Carteira</span></a></li>' : ''; ?>
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Employee Wallet'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pread = $get_check['pread'];
	?>
	<?php echo ($pread == 1) ? '<li><a href="mywallet.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span>Minha Carteira</span></a></li>' : ''; ?>
<?php } ?>	
	
	
<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("405")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Loan Details'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>	
		<?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fa fa-dollar"></i> <span>Emprestimo</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newloans.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("405").'"><i class="fa fa-circle-o"></i> Novo Emprestimo</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listloans.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("405").'"><i class="fa fa-circle-o"></i>Emprestimos</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Loan Details'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>	
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-dollar"></i> <span>Emprestimo</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newloans.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("405").'"><i class="fa fa-circle-o"></i> Novo Emprestimo</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listloans.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("405").'"><i class="fa fa-circle-o"></i>Emprestimos</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php } ?>
		
	
<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("406")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Internal Message'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fa fa-book"></i> <span>Mensagem</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'"><i class="fa fa-circle-o"></i> Nova SMS</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="inboxmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'"><i class="fa fa-circle-o"></i>Inbox SMS</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="outboxmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'"><i class="fa fa-circle-o"></i>Outbox SMS</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Internal Message'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-book"></i> <span>Mensagem</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'"><i class="fa fa-circle-o"></i> Nova SMS</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="inboxmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'"><i class="fa fa-circle-o"></i>Inbox SMS</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="outboxmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'"><i class="fa fa-circle-o"></i>Outbox SMS</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php } ?>
		

<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("407")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Missed Payment'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pread = $get_check['pread'];
?>		
		<?php echo ($pread == 1) ? '<li class="active"><a href="missedpayment.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("407").'"><i class="fa fa-dollar"></i> <span>Pagamentos em Atrazo</span></a></li>' : ''; ?>	
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Missed Payment'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pread = $get_check['pread'];
?>		
		<?php echo ($pread == 1) ? '<li><a href="missedpayment.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("407").'"><i class="fa fa-dollar"></i> <span>Pagamentos em Atrazo</span></a></li>' : ''; ?>	
<?php } ?>
	

<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("408")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Payment'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>	
        <?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fa fa-dollar"></i> <span>Pagamento</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newpayments.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("408").'"><i class="fa fa-circle-o"></i> Novo Pagamento</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listpayment.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("408").'"><i class="fa fa-circle-o"></i>Lista PagamentoPayments</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?> 
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Payment'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>	
        <?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-dollar"></i> <span>Pagamento</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newpayments.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("408").'"><i class="fa fa-circle-o"></i> Novo Pagamento</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listpayment.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("408").'"><i class="fa fa-circle-o"></i>Lista Pagamento</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?> 
<?php } ?>
	
		
<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("409")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Employee Details'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fa fa-user"></i> <span>Funcionário</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newemployee.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("409").'"><i class="fa fa-circle-o"></i> Novo Funcionário</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listemployee.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("409").'"><i class="fa fa-circle-o"></i>Lista Funcionário</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?> 
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Employee Details'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-user"></i> <span>Funcionário</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newemployee.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("409").'"><i class="fa fa-circle-o"></i> Novo Funcionário</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listemployee.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("409").'"><i class="fa fa-circle-o"></i>Lista Funcionário</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php } ?>


<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("413")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Module Permission'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fa fa-cogs"></i> <span>Permissão</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
		<?php echo ($pread == 1) ? '<li><a href="permission_list.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("413").'"><i class="fa fa-circle-o"></i>Permissão por modulo</a></li>' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="add_permission.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("413").'"><i class="fa fa-circle-o"></i>Adicionar Permissão</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Module Permission'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-cogs"></i> <span>Permissão</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
		<?php echo ($pread == 1) ? '<li><a href="permission_list.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("413").'"><i class="fa fa-circle-o"></i>Permissão por modulo</a></li>' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="add_permission.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("413").'"><i class="fa fa-circle-o"></i>Adicionar Permissão</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php } ?>

	
<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("410")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Savings Account'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>			
		<?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fa fa-money"></i> <span>Poupança</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
		<?php echo ($pread == 1) ? '<li><a href="customer.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>Clientes</a></li>' : ''; ?> 
		<?php echo ($pcreate == 1) ? '<li><a href="deposit.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>Depositos</a></li>' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="withdraw.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>Levatamento</a></li>' : ''; ?>
		<?php echo ($pread == 1) ? '<li><a href="transaction.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>Todas Transações</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Savings Account'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>			
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-money"></i> <span>Poupança</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
		<?php echo ($pread == 1) ? '<li><a href="customer.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>Clientes</a></li>' : ''; ?> 
		<?php echo ($pcreate == 1) ? '<li><a href="deposit.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>Deposito</a></li>' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="withdraw.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>Levantamento</a></li>' : ''; ?>
		<?php echo ($pread == 1) ? '<li><a href="transaction.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>Todas Transações</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php } ?>

	
<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("411")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'General Settings'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fa fa-gear"></i> <span>Configuraçõs</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="system_set.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("411").'"><i class="fa fa-circle-o"></i>Configuraçao de Empresa</a></li>' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="sms.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("411").'"><i class="fa fa-circle-o"></i>SMS Gateway</a></li>' : ''; ?>
		<?php echo ($pread == 1) ? '<li><a href="backupdatabase.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("411").'"><i class="fa fa-circle-o"></i>Backup Database</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'General Settings'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-gear"></i> <span>Configuraçõs</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="system_set.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("411").'"><i class="fa fa-circle-o"></i>Configuraçao de Empresa</a></li>' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="sms.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("411").'"><i class="fa fa-circle-o"></i>SMS Gateway</a></li>' : ''; ?>
		<?php echo ($pread == 1) ? '<li><a href="backupdatabase.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("411").'"><i class="fa fa-circle-o"></i>Backup Database</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php } ?>
		
		
		<li>
          <a href="../logout.php">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
		

    </section>
    <!-- /.sidebar -->
  </aside>