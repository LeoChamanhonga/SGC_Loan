<?php include("include/header.php"); ?>
<?php
$mutuario = $_GET['mutuario'];
$linha = $_GET['linha'];
$cadeia = $_GET['cadeia'];
$cadeiaVal = $_GET['cadeiaVal'];
$nr_fam_beneficiarios = $_GET['nr_fam_beneficiarios'];

$sql = "INSERT INTO familias_beneficiarias(numero_previsto, mutuario, linha, cadeia, cadeiaval)VALUES('$nr_fam_beneficiarios', '$mutuario', '$linha', '$cadeia', '$cadeiaVal')";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
if($rs > 0){
    echo "Numero de familias beneficiarias adicionada com sucesso!";
}else{
    echo "Erro ao adicionar o numero de familias beneficiarias!";
}