<?php include("include/header.php"); ?>
<?php
$mutuario = $_GET['mutuario'];
$linha = $_GET['linha'];
$cadeia = $_GET['cadeia'];
$cadeiaVal = $_GET['cadeiaVal'];
$cultura = $_GET['cultura'];
$valor = $_GET['valor'];

$sql = "INSERT INTO receita_cultura(cultura, receita_prevista, mutuario, linha, cadeia, cadeiaval)VALUES('$cultura', '$valor', '$mutuario', '$linha', '$cadeia', '$cadeiaVal')";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
if($rs > 0){
    echo "Receita adicionada com sucesso!";
}else{
    echo "Erro ao adicionar receita!";
}