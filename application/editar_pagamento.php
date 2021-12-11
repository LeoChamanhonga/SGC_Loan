<?php include("include/header.php"); ?>
<?php
$ida = $_POST['ida'];
$account = $_POST['account'];
$pay_date = $_POST['pay_date'];
$amount_to_pay = $_POST['amount_to_pay'];
$referencia = $_POST['referencia'];
$conta = $_POST['conta'];
$remarks = $_POST['remarks'];

$sql = "UPDATE payments SET pay_date = '$pay_date', amount_to_pay = '$amount_to_pay',referencia = '$referencia', conta = '$conta', remarks = '$remarks' WHERE id = '$ida'";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
if($rs > 0){
    echo "<script>alert('Pagamento atualizado com sucesso!'); </script>";
    echo "<script>window.location='listpayment.php?id=".$_SESSION['tid']."'; </script>";
}else{
    echo "<script>alert('Erro ao atualizar pagamento!'); </script>";
}