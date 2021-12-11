<?php include("include/header.php"); ?>
<?php
$mutuario = $_GET['mutuario'];
$linha = $_GET['linha'];
$cadeia = $_GET['cadeia'];
$cadeiaVal = $_GET['cadeiaVal'];
$cultura = $_GET['cultura'];
$qtd = $_GET['qtd'];
$area = $_GET['area'];

$sql = "INSERT INTO producao_cultura(cultura, qtd_prevista, area_prevista, mutuario, linha, cadeia, cadeiaval)VALUES('$cultura', '$qtd', '$area', '$mutuario', '$linha', '$cadeia', '$cadeiaVal')";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
if($rs > 0){
    echo "Cultura $cultura adicionada com sucesso!";
}else{
    echo "Erro ao adicionar cultura!";
}