<?php include("include/header.php"); ?>
<?php
$mutuario = $_GET['mutuario'];
$linha = $_GET['linha'];
$cadeia = $_GET['cadeia'];
$cadeiaVal = $_GET['cadeiaVal'];
$mulheres_sazonais = $_GET['mulheres_sazonais'];
$homens_sazonais = $_GET['homens_sazonais'];

$sql = "INSERT INTO numero_empregos_sazonais(mulheres_prevista, homens_previstos, mutuario, linha, cadeia, cadeiaval)VALUES('$mulheres_sazonais', '$homens_sazonais', '$mutuario', '$linha', '$cadeia', '$cadeiaVal')";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
if($rs > 0){
    echo "Emprego sazonal adicionado com sucesso!";
}else{
    echo "Erro ao adicionar emprego!";
}