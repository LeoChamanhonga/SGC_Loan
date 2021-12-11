<?php include("include/header.php"); ?>
<?php
$mutuario = $_GET['mutuario'];
$linha = $_GET['linha'];
$cadeia = $_GET['cadeia'];
$cadeiaVal = $_GET['cadeiaVal'];
$mulheres_fixas_alcancadas = $_GET['mulheres_fixas_alcancadas'];
$homens_fixos_alcancados = $_GET['homens_fixos_alcancados'];

$sql = "UPDATE numero_empregos_fixos SET mulheres_alcancadas = '$mulheres_fixas_alcancadas', homens_alcancados = '$homens_fixos_alcancados' WHERE mutuario = '$mutuario' AND linha = '$linha' AND cadeia = '$cadeia' AND cadeiaval = '$cadeiaVal'";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
if($rs > 0){
    echo "Numero de empregos fixos alcancados atualizado com sucesso!";
}else{
    echo "Erro ao atualizar numero de empregos fixos alcancados!";
}