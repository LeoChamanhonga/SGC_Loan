<?php include("include/header.php"); ?>
<?php
$mutuario = $_GET['mutuario'];
$linha = $_GET['linha'];
$cadeia = $_GET['cadeia'];
$cadeiaVal = $_GET['cadeiaVal'];
$nr_bem_alcancado = $_GET['nr_bem_alcancado'];

$sql = "UPDATE beneficiarias SET numero_alcancado = '$nr_bem_alcancado' WHERE mutuario = '$mutuario' AND linha = '$linha' AND cadeia = '$cadeia' AND cadeiaval = '$cadeiaVal'";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
if($rs > 0){
    echo "Numero de beneficiarios alcancados atualizado com sucesso!";
}else{
    echo "Erro ao atualizar numero de beneficiarios alcancados!";
}