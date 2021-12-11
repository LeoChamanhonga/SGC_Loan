<?php include("include/header.php"); ?>
<?php
$mutuario = $_GET['mutuario'];
$linha = $_GET['linha'];
$cadeia = $_GET['cadeia'];
$cadeiaVal = $_GET['cadeiaVal'];
$mulheres_sazonais_alcancadas = $_GET['mulheres_sazonais_alcancadas'];
$homens_sazonais_alcancados = $_GET['homens_sazonais_alcancados'];

$sql = "UPDATE numero_empregos_sazonais SET mulheres_alcancadas = '$mulheres_sazonais_alcancadas', homens_alcancados = '$homens_sazonais_alcancados' WHERE mutuario = '$mutuario' AND linha = '$linha' AND cadeia = '$cadeia' AND cadeiaval = '$cadeiaVal'";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
if($rs > 0){
    echo "Numero de empregos sazonais alcancados atualizado com sucesso!";
}else{
    echo "Erro ao atualizar numero de empregos sazonais alcancados!";
}