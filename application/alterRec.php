<?php include("include/header.php"); ?>
<?php
$mutuario = $_GET['mutuario'];
$linha = $_GET['linha'];
$cadeia = $_GET['cadeia'];
$cadeiaVal = $_GET['cadeiaVal'];
$cultura = $_GET['cultura'];
$valor = $_GET['valor_alcancado'];

$sql = "UPDATE receita_cultura SET receita_alcancada = '$valor' WHERE mutuario = '$mutuario' AND linha = '$linha' AND cadeia = '$cadeia' AND cadeiaval = '$cadeiaVal' AND cultura = '$cultura'";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
if($rs > 0){
    echo "Receita alcancada atualizada com sucesso!";
}else{
    echo "Erro ao atualizar receita alcancada!";
}