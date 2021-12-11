<?php include("include/header.php"); ?>
<?php
$mutuario = $_GET['mutuario'];
$linha = $_GET['linha'];
$cadeia = $_GET['cadeia'];
$cadeiaVal = $_GET['cadeiaVal'];
$cultura = $_GET['cultura'];
$qtd = $_GET['qtd_alcancada'];
$area = $_GET['area_alcancada'];

$sql = "UPDATE producao_cultura SET qtd_alcancada = '$qtd', area_alcancada = '$area' WHERE mutuario = '$mutuario' AND linha = '$linha' AND cadeia = '$cadeia' AND cadeiaval = '$cadeiaVal' AND cultura = '$cultura'";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
if($rs > 0){
    echo "Quantidade alcancada atualizada com sucesso!";
}else{
    echo "Erro ao atualizar quantidade alcancada!";
}